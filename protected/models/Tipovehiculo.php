<?php

/**
 * This is the model class for table "tipovehiculo".
 *
 * The followings are the available columns in table 'tipovehiculo':
 * @property integer $idtipovehiculo
 * @property string $tipovehiculocol
 * @property string $valor_minuto
 * @property integer $minimo_minutos
 * @property integer $numero_plazas
 *
 * The followings are the available model relations:
 * @property Registro[] $registros
 */
class Tipovehiculo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipovehiculo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idtipovehiculo, tipovehiculocol, valor_minuto, minimo_minutos, numero_plazas, requiere_tarjeta', 'required'),
			array('idtipovehiculo, minimo_minutos, numero_plazas', 'numerical', 'integerOnly'=>true),
			array('requiere_tarjeta','numerical'),
			array('tipovehiculocol', 'length', 'max'=>45),
			array('valor_minuto', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idtipovehiculo, tipovehiculocol, valor_minuto, minimo_minutos', 'safe', 'on'=>'search'),
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
			'registros' => array(self::HAS_MANY, 'Registro', 'tipovehiculo_idtipovehiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idtipovehiculo' => '#  tipo de vehículo',
			'tipovehiculocol' => 'Tipo de vehículo',
			'valor_minuto' => 'Valor Minuto',
			'minimo_minutos' => 'Minimo Minutos',
			'numero_plazas'=>'Cantidad de lugares disponibles',
			'requiere_tarjeta'=>'¿Requiere tarjeta de propiedad?',
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

		$criteria->compare('idtipovehiculo',$this->idtipovehiculo);
		$criteria->compare('tipovehiculocol',$this->tipovehiculocol,true);
		$criteria->compare('valor_minuto',$this->valor_minuto,true);
		$criteria->compare('minimo_minutos',$this->minimo_minutos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tipovehiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
