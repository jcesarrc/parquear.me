<?php

/**
 * This is the model class for table "plan".
 *
 * The followings are the available columns in table 'plan':
 * @property integer $idplan
 * @property string $descplan
 * @property string $descuento
 *
 * The followings are the available model relations:
 * @property Registro[] $registros
 */
class Plan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descplan, descuento', 'required'),
			array('descplan', 'length', 'max'=>255),
			array('descuento', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idplan, descplan, descuento', 'safe', 'on'=>'search'),
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
			'registros' => array(self::HAS_MANY, 'Registro', 'plan_idplan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idplan' => '# plan',
			'descplan' => 'Plan',
			'descuento' => 'Costo',
			'duracion'=> 'Días del plan',
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

		$criteria->compare('idplan',$this->idplan);
		$criteria->compare('descplan',$this->descplan,true);
		$criteria->compare('descuento',$this->descuento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
