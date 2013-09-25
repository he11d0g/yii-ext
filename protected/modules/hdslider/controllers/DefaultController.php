<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionUpload()
    {
        $uploadPath = Yii::getPathOfAlias('webroot').'/uploads/hdslider';
        echo $uploadPath;
    }
}