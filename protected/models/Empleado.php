<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property string $idempleado
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $direccion
 * @property string $eps
 * @property integer $estadoempleado_idestadoempleado
 * @property integer $ciudad_idciudad
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudadIdciudad
 * @property Estadoempleado $estadoempleadoIdestadoempleado
 */
class Empleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idempleado, nombre, apellido, telefono, direccion, estadoempleado_idestadoempleado, ciudad_idciudad', 'required'),
			array('estadoempleado_idestadoempleado, ciudad_idciudad', 'numerical', 'integerOnly'=>true),
			array('idempleado', 'length', 'max'=>20),
			array('nombre, apellido', 'length', 'max'=>255),
			array('telefono, direccion, eps', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idempleado, nombre, apellido, telefono, direccion, eps, estadoempleado_idestadoempleado, ciudad_idciudad', 'safe', 'on'=>'search'),
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
			'ciudadIdciudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_idciudad'),
			'estadoempleadoIdestadoempleado' => array(self::BELONGS_TO, 'Estadoempleado', 'estadoempleado_idestadoempleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idempleado' => 'Idempleado',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
			'eps' => 'Eps',
			'estadoempleado_idestadoempleado' => 'Estadoempleado Idestadoempleado',
			'ciudad_idciudad' => 'Ciudad Idciudad',
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

		$criteria->compare('idempleado',$this->idempleado,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('eps',$this->eps,true);
		$criteria->compare('estadoempleado_idestadoempleado',$this->estadoempleado_idestadoempleado);
		$criteria->compare('ciudad_idciudad',$this->ciudad_idciudad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
