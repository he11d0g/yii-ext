<?php
/* @var $this DefaultController */
echo CHtml::link('Управление слайдерами',Yii::app()->createUrl('hdslider/default/index'));
echo '<br>';
echo CHtml::link('Добавить изображение',Yii::app()->createUrl('hdslider/images/create'));
echo '<br><hr>';
$this->widget('zii.widgets.grid.CGridView',array(
    'id' => 'images',
    'dataProvider' => $model->search(),
    'columns' => array(
        'id',
        'slider_id',
        'name',
        'path',
        'sort',
        array(
            'class' => 'CButtonColumn'
        ),
    ),
))
?>
