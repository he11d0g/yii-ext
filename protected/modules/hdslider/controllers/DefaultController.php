<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
        $model = new HDSlider;

		$this->render('index',array('model' => $model));
	}

    public function actionCreate()
    {
        $model = new HDSlider;
        if(isset($_POST['HDSlider']))
        {
            $model->attributes = $_POST['HDSlider'];
            $model->save();
        }
        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {

    }

    public function actionDelete($id)
    {

    }

}