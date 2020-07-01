<?php
/**
 * Created by PhpStorm.
 * User: zheni
 * Date: 6/30/2020
 * Time: 1:12 PM
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public function beforeAction($action)
    {
        return $this->view->title = \Yii::$app->name;
    }

}