<?php
/**
 * @author: he11d0g <im@helldog.net>
 * @date:   25.09.13
 * @link    http://helldog.net
 */
?>
<?php if(Yii::app()->user->hasFlash('info')):
    echo Yii::app()->user->getFlash('info');
endif; ?>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'sliderimages-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'slider_id'); ?>
        <?php echo $form->dropDownList($model,'slider_id',CHtml::listData(HDSlider::model()->findAll(),'id','name')); ?>
        <?php echo $form->error($model,'slider_id'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name'); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'path'); ?>
        <?php echo $form->textField($model,'path'); ?>
        <?php echo $form->error($model,'path'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'description'); ?>
        <?php echo $form->textField($model,'description'); ?>
        <?php echo $form->error($model,'description'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'link'); ?>
        <?php echo $form->textField($model,'link'); ?>
        <?php echo $form->error($model,'link'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'sort'); ?>
        <?php echo $form->textField($model,'sort'); ?>
        <?php echo $form->error($model,'sort'); ?>
    </div>
    <div class="row">
        <?php if($model->isNewRecord){
            echo CHtml::submitButton('Добавить');
        } else
            echo CHtml::submitButton('Обновить') ?>
    </div>
    <?php $this->endWidget() ?>
</div>