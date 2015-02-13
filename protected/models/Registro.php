<?php

/**
 * This is the model class for table "registro".
 *
 * The followings are the available columns in table 'registro':
 * @property integer $idregistro
 * @property string $hora_entrada
 * @property string $hora_salida
 * @property string $pago
 * @property integer $plan_idplan
 * @property string $placa
 * @property string $numero_motor
 * @property string $serial
 * @property string $propietario
 * @property string $cedula
 * @property integer $tipovehiculo_idtipovehiculo
 *
 * The followings are the available model relations:
 * @property Plan $planIdplan
 * @property Tipovehiculo $tipovehiculoIdtipovehiculo
 */
class Registro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hora_entrada, plan_idplan, placa, tipovehiculo_idtipovehiculo', 'required'),
			array('plan_idplan, tipovehiculo_idtipovehiculo', 'numerical', 'integerOnly'=>true),
			array('hora_entrada, hora_salida', 'length', 'max'=>45),
			array('pago', 'length', 'max'=>10),
			array('placa', 'length', 'max'=>6),
			array('numero_motor, serial, cedula', 'length', 'max'=>20),
			array('numero_motor, serial, propietario, cedula', 'required', 'on'=>'isMoto'),
			array('propietario', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('placa', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'planIdplan' => array(self::BELONGS_TO, 'Plan', 'plan_idplan'),
			'tipovehiculoIdtipovehiculo' => array(self::BELONGS_TO, 'Tipovehiculo', 'tipovehiculo_idtipovehiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idregistro' => 'Idregistro',
			'hora_entrada' => 'Hora Entrada',
			'hora_salida' => 'Hora Salida',
			'pago' => 'Pago',
			'plan_idplan' => 'Plan Idplan',
			'placa' => 'Placa',
			'numero_motor' => 'Numero Motor',
			'serial' => 'Serial',
			'propietario' => 'Propietario',
			'cedula' => 'Cédula',
			'tipovehiculo_idtipovehiculo' => 'Tipovehiculo Idtipovehiculo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('placa',$this->placa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function searchPlaca($placa)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->select = 'idregistro';
		$criteria->condition = 'placa=:iplaca';
		$criteria->params = array(':iplaca'=>$placa);

		$row = Registro::model()->find($criteria);

		return $row;
	}


	public function searchCustom(){

		$criteria=new CDbCriteria;

		$criteria->compare('placa',$this->placa,true);
		$criteria->addCondition('pago = 0');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));

	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
