<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pavlovskiy
 * Date: 25.09.13
 * Time: 9:22
 * To change this template use File | Settings | File Templates.
 */

/**
 * Публикация ресурсов
 */
$assetPath = CHtml::asset(Yii::getPathOfAlias('application.modules.hdslider.assets'));
Yii::app()->clientScript->registerCssFile($assetPath.'/css/style2.css');
Yii::app()->clientScript->registerCssFile($assetPath.'/css/demo.css');
Yii::app()->clientScript->registerScriptFile($assetPath.'/js/modernizr.custom.28468.js');
Yii::app()->clientScript->registerScriptFile($assetPath.'/js/jquery.cslider.js');
?>


<div class="container">
    <div id="da-slider" class="da-slider">
        <?php foreach ($slider->images as $image) {?>
        <div class="da-slide">
            <h2><?php echo $image->name ?></h2>
            <p><?php echo $image->description ?></p>
            <?php if($image->link) { ?>
                <a href="#" class="da-link"></a>
            <?php } ?>
            <div class="da-img"><img src="<?php echo Yii::app()->request->baseUrl.'/uploads/hdslider/'.$image->path ?>" alt="image01" /></div>
        </div>
        <?php } ?>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>
<?php
Yii::app()->clientScript->registerScript('slider',
    ' $(function() {

        $("#da-slider").cslider({
            autoplay	: '.$params['autoplay'].',
            bgincrement	: '.$params['bgincrement'].'
        });
       });'

); ?>

