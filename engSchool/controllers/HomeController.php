<?php
/**
 * Created by PhpStorm.
 * User: zheni
 * Date: 6/30/2020
 * Time: 1:14 PM
 */

namespace app\controllers;


class HomeController extends AppController
{
    public function actionIndex(){

        return $this->render('index');
    }

}