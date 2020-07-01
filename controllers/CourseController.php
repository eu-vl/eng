<?php


namespace app\controllers;


use app\models\Course;

class CourseController extends AppController
{
    public function actionIndex(){
        $course = Course::find()->all();
        return $this->render('index', compact('course'));
    }
}