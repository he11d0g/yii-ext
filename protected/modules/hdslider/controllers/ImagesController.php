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
        $model = new HDSliderImages;

        $this->render('index',array('model' => $model));
    }

    /**
     * @TODO не корректно загружяется файл с кириллицей в имени файла
     */
    public function actionCreate()
    {
        $model = new HDSliderImages;
        if(isset($_POST['HDSliderImages']))
        {
            $model->attributes = $_POST['HDSliderImages'];
            if($model->save()) {
                Yii::app()->user->setFlash('info','Слайдер Добавлен!');
            } else {
                Yii::app()->user->setFlash('info','Ошибка!');
            }
            $this->redirect(array('create'));
        }
        $this->render('create', array('model' => $model));
    }


    /**
     * @TODO не корректно загружяется файл с кириллицей в имени файла
     */
    public function actionUpdate($id)
    {
        $model = HDSliderImages::model()->with('slider')->findByPk($id);
        if(isset($_POST['HDSliderImages']))
        {
            $model->attributes = $_POST['HDSliderImages'];
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
            HDSliderImages::model()->findByPk($id)->delete();
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        }
    }

}
