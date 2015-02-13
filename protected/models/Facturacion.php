<?php

/**
 * This is the model class for table "facturacion".
 *
 * The followings are the available columns in table 'facturacion':
 * @property string $id_empresa
 * @property string $nombre_empresa
 * @property string $nit
 * @property string $direccion
 * @property string $telefono
 * @property integer $iva
 * @property integer $numero_inicial
 * @property string $texto
 */
class Facturacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'facturacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_empresa, nit, direccion, telefono, iva, numero_inicial', 'required'),
			array('iva, numero_inicial', 'numerical', 'integerOnly'=>true),
			array('nombre_empresa', 'length', 'max'=>255),
			array('nit, direccion', 'length', 'max'=>45),
			array('telefono', 'length', 'max'=>12),
			array('texto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_empresa, nombre_empresa, nit, direccion, telefono, iva, numero_inicial, texto', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_empresa' => 'Id Parqueadero',
			'nombre_empresa' => 'Nombre Parqueadero',
			'nit' => 'NIT',
			'direccion' => 'Dirección',
			'telefono' => 'Teléfono',
			'iva' => 'Iva %',
			'numero_inicial' => 'Numero de factura inicial',
			'texto' => 'Texto pie de factura',
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

		$criteria->compare('id_empresa',$this->id_empresa,true);
		$criteria->compare('nombre_empresa',$this->nombre_empresa,true);
		$criteria->compare('nit',$this->nit,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('iva',$this->iva);
		$criteria->compare('numero_inicial',$this->numero_inicial);
		$criteria->compare('texto',$this->texto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Facturacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
