<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'Listar Vehiculo', 'url'=>array('index')),
	array('label'=>'Administrar Vehiculo', 'url'=>array('admin')),
);
*/
?>

<h1>Registrar vehiculo</h1>
<?php
	if(isset($_REQUEST["tipovehiculo"])){
		$tipovehiculo = Yii::App()->getRequest()->getQuery("tipovehiculo");
		$model->tipovehiculo_idtipovehiculo = $tipovehiculo;
	}
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>