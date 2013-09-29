<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pavlovskiy
 * Date: 25.09.13
 * Time: 9:21
 * To change this template use File | Settings | File Templates.
 */
class HDSliderWidget extends CWidget
{
    /**
     * @var string Название слайдера
     */
    public $name;

    /**
     * @throws Exception
     */
    public function run()
    {
        if(!$this->name)
            throw new Exception('Укажите название слайдера!');
        Yii::import('application.modules.hdslider.models.*');
        $slider = HDSlider::model()->with('images')->find('t.name = :name',array(':name' => $this->name));
        $params = $slider->getConfig();

        $this->render('slider',array('slider'=>$slider,'params' =>$params));
    }



}