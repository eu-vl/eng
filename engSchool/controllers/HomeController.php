<?php
/**
 * Created by PhpStorm.
 * User: zheni
 * Date: 6/30/2020
 * Time: 1:14 PM
 */

namespace app\controllers;


use app\models\OurTeam;

class HomeController extends AppController
{
    public function actionIndex(){
         $eugene = OurTeam::find()->where(['id' => 1])->all();
         $vlad = OurTeam::find()->where(['id' => 2])->all();
         $andrew = OurTeam::find()->where(['id' => 3])->all();





        return $this->render('index', compact('eugene','vlad', 'andrew'));
    }

}