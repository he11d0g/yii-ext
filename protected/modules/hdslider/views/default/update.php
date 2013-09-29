<?php
/**
 * @author: he11d0g <im@helldog.net>
 * @date:   25.09.13
 */
echo CHtml::link('Управление слайдерами',Yii::app()->createUrl('hdslider/default/create'));
echo '<br>';
echo CHtml::link('Добавить слайдер',Yii::app()->createUrl('hdslider/default/create'));
echo '<br><hr>';
echo CHtml::link('Управление изображениями',Yii::app()->createUrl('hdslider/images'));
echo '<br><hr>';
echo CHtml::link('',Yii::app()->createUrl('hdslider/default/create'));
$this->renderPartial('_form',array('model' => $model));