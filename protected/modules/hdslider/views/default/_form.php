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
        'id'=>'slider-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name'); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'params'); ?>
        <?php echo $form->textField($model,'params'); ?>
        <?php echo 'Оставьте поле пустым для автогенерации' ?>
        <?php echo $form->error($model,'params'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->textField($model,'status'); ?>
        <?php echo $form->error($model,'status'); ?>
    </div>
    <div class="row">
        <?php if($model->isNewRecord){
            echo CHtml::submitButton('Добавить');
        } else
            echo CHtml::submitButton('Обновить') ?>
    </div>
    <?php $this->endWidget() ?>
</div>