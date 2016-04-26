<?php

/**
 * This is the model class for table "mijoz".
 *
 * The followings are the available columns in table 'mijoz':
 * @property integer $id
 * @property string $MijozIsmi
 * @property string $MijozEmail
 * @property integer $MijozTelNomer
 * @property string $MijozParol
 *
 * The followings are the available model relations:
 * @property Orderdetails[] $orderdetails
 */
class Mijoz extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mijoz';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MijozIsmi, MijozEmail, MijozTelNomer, MijozParol', 'required'),
			array('MijozTelNomer', 'numerical', 'integerOnly'=>true),
			array('MijozIsmi, MijozParol', 'length', 'max'=>30),
			array('MijozEmail', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, MijozIsmi, MijozEmail, MijozTelNomer, MijozParol', 'safe', 'on'=>'search'),
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
			'orderdetails' => array(self::HAS_MANY, 'Orderdetails', 'mijoz_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'MijozIsmi' => 'Mijoz Ismi',
			'MijozEmail' => 'Mijoz Email',
			'MijozTelNomer' => 'Mijoz Tel Nomer',
			'MijozParol' => 'Mijoz Parol',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('MijozIsmi',$this->MijozIsmi,true);
		$criteria->compare('MijozEmail',$this->MijozEmail,true);
		$criteria->compare('MijozTelNomer',$this->MijozTelNomer);
		$criteria->compare('MijozParol',$this->MijozParol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mijoz the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
