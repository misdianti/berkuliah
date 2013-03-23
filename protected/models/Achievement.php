<?php

/**
 * This is the model class for table "achievement".
 *
 * The followings are the available columns in table 'achievement':
 * @property integer $badge_id
 * @property integer $student_id
 * @property string $timestamp
 */
class Achievement extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Achievement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'achievement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('badge_id, student_id, timestamp', 'required'),
			array('badge_id, student_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('badge_id, student_id, timestamp', 'safe', 'on'=>'search'),
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
			'badge_id' => 'Badge',
			'student_id' => 'Student',
			'timestamp' => 'Timestamp',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('badge_id',$this->badge_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('timestamp',$this->timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}