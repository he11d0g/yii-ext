<?php
/* @var $this DefaultController */

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
<?php //$this->widget('application.modules.hdslider.widgets.HDSliderWidget',array('name' => 'Test')); ?>