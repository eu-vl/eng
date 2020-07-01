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
         $ourteam = OurTeam::find()->all();





        return $this->render('index', compact('ourteam'));
    }

}