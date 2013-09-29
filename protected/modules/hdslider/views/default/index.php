<?php
/* @var $this DefaultController */

$this->widget('zii.widgets.grid.CGridView',array(
    'id' => 'sliders',
    'dataProvider' => $model->search(),
    'columns' => array(
        'id',
        'name',
        'params',
        'status',
        array(
            'class' => 'CButtonColumn'
        ),
    ),
))
?>
<?php $this->widget('application.modules.hdslider.widgets.HDSliderWidget',array('name' => 'Test')); ?>