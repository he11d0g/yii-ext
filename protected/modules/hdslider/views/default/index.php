<?php

echo CHtml::link('Добавить слайдер',Yii::app()->createUrl('hdslider/default/create'));
echo '<br>';
echo CHtml::link('Управление изображениями',Yii::app()->createUrl('hdslider/images'));
echo '<br><hr>';

$this->widget('zii.widgets.grid.CGridView',array(
    'id' => 'sliders',
    'dataProvider' => $model->search(),
    'columns' => array(
        'id',
        'name',
        'params',
        'status',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update} {delete}'
        ),
    ),
))
?>
