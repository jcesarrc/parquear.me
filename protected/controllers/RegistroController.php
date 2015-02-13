<?php

class RegistroController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','salida','buscar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Registro;
		$model->hora_entrada = date('Y-m-d H:i:s');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Registro']))
		{
			$model->attributes=$_POST['Registro'];

			//Si requiere datos de la tarjeta de propiedad, hacer los campos obligatorios
			if($model->tipovehiculoIdtipovehiculo->requiere_tarjeta==1)
				$model->setScenario('isMoto');

			//Verificar si el auto ya habia sido registrado a la salida ANTES de hacer otra entrada

			$c = 0;
			$d = 0;

			$c = count(Registro::model()->findAllByAttributes(
				array(
					'placa' => $model->placa,
				),
				array(
					'condition' => 'hora_salida = :date',
      				'params' => array(':date'=>''),
    			)
			));

			$d = count(Registro::model()->findAllByAttributes(
				array(
					'placa' => $model->placa,
				),
				array(
					'condition' => 'plan_idplan > :idplan',
					'params' => array(':idplan'=>1),
				)
			));

			if($c > 0){
				$model->addError('original_asset_number', "Este automóvil ya entró y no se le ha hecho registro de salida");
			} else {
					//Verificar si ha entrado previamente con plan diferente al plan normal : idplan = 1
					if($d > 0){
						//Ahora mirar si la distancia entre el dia en el que entro en ese plan, y la fecha de entrada actual
						//es mayor al numero de dias de ese plan
						$reg = $this->registroDesdeLaUltimaVez($model->placa,$model->hora_entrada,1);
						if($reg['remanente']<0){
							//Aun esta con los minutos del plan contratado
							$model->plan_idplan = 1;
						}
					}else{
						//Quiere decir que el registro es nuevo. Asi que se deja igual como viene
						//salvo que se actualiza el valor del pago, pues se debe facturar de antemano
						$model->pago = $model->planIdplan->descuento;
					}

					if ($model->save())
						$this->redirect(array('view', 'id' => $model->idregistro));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Registro']))
		{
			$model->attributes=$_POST['Registro'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idregistro));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}


	public function actionSalida($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Registro']))
		{
			$model->attributes=$_POST['Registro'];

			if($model->save())
				$this->redirect(array('view','id'=>$model->idregistro));
		}


		$queda_tiempo = false;
		$plan_original = '';

		$model->hora_salida = date('Y-m-d H:i:s');
		$regEntrada = $this->registroDesdeLaUltimaVez($model->placa, $model->hora_entrada, 1);
		$regSalida = $this->registroDesdeLaUltimaVez($model->placa, $model->hora_salida, 1);

		if($regEntrada['remanente']>0){
			//Quiere decir q esta fecha no tiene nada q ver con una contratacion con plan
			$to_time = strtotime($model->hora_salida);
			$from_time = strtotime($model->hora_entrada);
			$minutes = round(abs($to_time - $from_time) / 60, 2);
			$pay = $minutes * $model->tipovehiculoIdtipovehiculo->valor_minuto;
			if ($minutes < $model->tipovehiculoIdtipovehiculo->minimo_minutos)
				$pay = $model->tipovehiculoIdtipovehiculo->minimo_minutos * $model->tipovehiculoIdtipovehiculo->valor_minuto;
			if ($model->plan_idplan != 1) {
				$pay = $model->planIdplan->descuento;
			}
			$model->pago = $pay;
		}else{
			if($regSalida['remanente']<0){
				//Quiere decir que la fecha de salida está también dentro del plan, así q este shot no se cobra
				//Se muestran los minutos / dias que aun le queden
				$model->pago = 0;
				$minutes = abs($regSalida['remanente']);
				$queda_tiempo = true;
				$plan_original = Plan::model()->findByPk($regEntrada['plan'])->descplan;
			}else{
				//Quiere decir, que el auto se pasó del tiempo del plan
				//Hay que calcular cuanto tiempo lleva en total, luego restarle el tiempo del plan contratado
				//luego calcular el valor de esos minutos extras

				$minutes = abs($regSalida['remanente']);
				$pay = $minutes * $model->tipovehiculoIdtipovehiculo->valor_minuto;
				$model->pago = $pay;
			}
		}

		$str = $minutes.' minutos'. ' '. $this->formatTime($minutes);


		$this->render('salida',array(
			'model'=>$model,
			'str'=>$str,
			'more'=>array('queda_tiempo'=>$queda_tiempo,
				'plan_original'=>$plan_original,),
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Registro');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{

		$model=new Registro('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Registro']))
			$model->attributes=$_GET['Registro'];

		$this->render('admin',array(
			'model'=>$model,
		));

	}

	public function actionBuscar()
	{

		$model=new Registro('search');

		if(isset($_GET['Registro'])) {
			$placa = ($_GET['Registro']['placa']);
			$criteria = new CDbCriteria;
			$criteria->select = 'MAX(idregistro) idregistro';
			$criteria->condition = 'placa=:iplaca';
			$criteria->params = array(':iplaca'=>$placa);

			$row = Registro::model()->find($criteria);
			$exists = Registro::model()->exists('idregistro=:reg',array(':reg'=>$row['idregistro']));
			if($exists){
				$this->redirect(array('salida', 'id' => $row['idregistro']));
			}
			else Yii::app()->user->setFlash('error','Este auto no tiene un registro de entrada pendiente');
		}
		$this->render('buscar',array(
			'model'=>$model,
		));

	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Registro the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Registro::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Registro $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registro-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function registroDesdeLaUltimaVez($placa, $momento, $plan){

		/*
		 *  plan = id del plan ORIGINAL
		 * maxHora = hora en la que entro cuando contrato el plan mensual/semanal/etc
		 * remanente = si la fecha $momento esta dentro del intervalo de duracion del plan
		 * si es >= 0 significa que ese plan ya se le termino
		 * si es <0 significa que esa fecha aun esta cobijada por el ultimo plan periodico que haya adquirido
		*/

		$criteria = new CDbCriteria;
		$criteria->select = 'idregistro, plan_idplan, max(hora_entrada) hora_entrada';
		$criteria->condition = 'placa=:iplaca AND plan_idplan>:iplan';
		$criteria->params = array(':iplaca'=>$placa, ':iplan'=>$plan);

		$row = Registro::model()->find($criteria);

		$to_time = strtotime($row['hora_entrada']);
		$from_time = strtotime($momento);

		$minutes = round(abs($to_time - $from_time) / 60 ,2);
		$plan = Plan::model()->findByPk($row['plan_idplan']);

		$trow['plan']=$row['plan_idplan'];
		$trow['maxHora']=$row['hora_entrada'];
		$trow['remanente'] = $minutes - $plan['duracion']*24*60;

		return $trow;

	}

	public function formatTime($mins){
		$str = '';
		$hrs = 0;
		$dias = 0;
		if($mins>60) {
			$hrs = floor($mins / 60);
			$mins = $mins%60;
		}
		if($hrs>24) {
			$dias = floor($hrs / 24);
			$hrs = $hrs % 24;
		}
		if($dias>0) $str = $str. $dias . 'd :';
		$str = $str.$hrs.' h:';
		$str = $str.$mins.'m';

		return '('.$str.')';
	}

	public function tiempoEntreIntervalos($hora_entrada, $hora_salida){
		$to_time = strtotime($hora_salida);
		$from_time = strtotime($hora_entrada);
		$minutes = round(abs($to_time - $from_time) / 60, 2);
		return $minutes;
	}

	public function formatTimeFactura($minutos){
		$dias = 0;
		$horas = floor($minutos/60);
		$minutos = $minutos%60;
		if($horas>24){
			$dias = floor($horas/24);
			$horas = $horas%24;
		}
		$str = str_pad($horas,2,"0",STR_PAD_LEFT).':'.str_pad($minutos,2,"0",STR_PAD_LEFT);
		if($dias>0) $str = str_pad($dias,2,"0",STR_PAD_LEFT).$str;

		return $str;
	}

}
