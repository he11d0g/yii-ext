<?php

/**
 *
 * The followings are the available columns in table 'hdslider_images':
 * @property integer $id
 * @property integer $slider_id
 * @property string $name
 * @property string $path
 * @property string $link
 * @property string $description
 * @property integer $sort
 */
class HDSliderImages extends CActiveRecord
{
    public $image;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hdslider_images';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('path','unique'),
           // array('image', 'file', 'types'=>'jpg, gif, png'),
            array('description', 'safe'),
			array('slider_id, name', 'required'),
			array('slider_id, sort', 'numerical', 'integerOnly'=>true),
			array('name, link', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, slider_id, name, path, link, description, sort', 'safe', 'on'=>'search'),
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
			'slider' => array(self::BELONGS_TO, 'HDSlider', 'slider_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'slider_id' => 'Slider',
			'name' => 'Name',
			'path' => 'Path',
			'link' => 'Link',
			'description' => 'Description',
			'sort' => 'Sort',
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
		$criteria->compare('slider_id',$this->slider_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HdSliderImages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function beforeSave()
    {
        $this->image = CUploadedFile::getInstance($this,'image');
        if($this->image)
        {
            if(is_file(Yii::getpathOfAlias('webroot.uploads.hdslider').'/'.$this->path)) {
                unlink(Yii::getpathOfAlias('webroot.uploads.hdslider').'/'.$this->path);
            }
            $this->image->saveAs(Yii::getpathOfAlias('webroot.uploads.hdslider').'/'.$this->image->name);
            $this->path = $this->image->name;
        }
        return parent::beforeSave();
    }

    /**
     * Удаление изображения
     */
    public function deleteImg()
    {
        $path = Yii::getpathOfAlias('webroot.uploads.hdslider').'/'.$this->path;
        if(is_file($path))
            unlink($path);

    }

    public function afterDelete()
    {
        $this->deleteImg();
        return parent::afterDelete();
    }


}
