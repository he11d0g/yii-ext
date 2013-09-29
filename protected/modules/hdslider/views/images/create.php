<?php
/**
 * @author: he11d0g <im@helldog.net>
 * @date:   25.09.13
 */
echo CHtml::link('Управление слайдерами',Yii::app()->createUrl('hdslider/default/index'));
echo '<br><hr>';
echo CHtml::link('Управление изображениями',Yii::app()->createUrl('hdslider/images/index'));
echo '<br><hr>';
$this->renderPartial('_form',array('model' => $model));