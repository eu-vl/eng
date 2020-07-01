<?php


namespace app\controllers;


use app\models\Teacher;
use yii\web\NotFoundHttpException;

class TeacherController extends AppController
{

    public function actionIndex(){
        $teacher = Teacher::find()->all();
        return $this->render('index', compact('teacher'));
    }

}