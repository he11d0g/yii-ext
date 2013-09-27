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
            if($model->save()) {
                Yii::app()->user->setFlash('info','Слайдер Добавлен!');
            } else {
                Yii::app()->user->setFlash('info','Ошибка!');
            }
            $this->redirect(array('create'));
        }
        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = HDSlider::model()->with('images')->findByPk($id);
        if(isset($_POST['HDSlider']))
        {
            $model->attributes = $_POST['HDSlider'];
            if($model->save()) {
                Yii::app()->user->setFlash('info','Слайдер обновлен!');
            } else {
                Yii::app()->user->setFlash('info','Ошибка!');
            }
        }
        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest)
        {
            HDSlider::model()->findByPk($id)->delete();
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        }
    }

}