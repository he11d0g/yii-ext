<?php
/**
 * @author: he11d0g <im@helldog.net>
 * @date:   26.09.13
 * @link    http://helldog.net
 */

class ImagesController extends CController
{
    public function actionIndex()
    {
        $model = new HDSliderImages();

        $this->render('index',array('model' => $model));
    }

    public function actionCreate()
    {
        $model = new HDSliderImages;
        if(isset($_POST['HDSliderImages']))
        {
            $model->attributes = $_POST['HDSliderImages'];
            $model->save();
        }
        $this->render('create', array('model' => $model));
    }
}
