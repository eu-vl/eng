<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Navbar start -->
<header>
    <div class="navbar-fixed ">
        <nav class="z-depth-2">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo" id="main-title">Ugandochka</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down navMenu">
                    <li><a href="<?= Url::to(['home/index'])?>">Home</a></li>
                    <li><a href="<?= Url::to(['teacher/index'])?>">Teachers</a></li>
                    <li><a href="<?= Url::to(['course/index'])?>">Courses</a></li>
                    <li><a href="Contact.html">Contacts</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>
            </div>
        </nav>

    </div>
    <ul id="mobile" class="sidenav">
<<<<<<< HEAD
        <li><a href="<?= Url::to('home/index') ?>">Home</a></li>
        <li><a href=""><?= Url::to('teacher/index') ?></a></li>
        <li><a href="<?= Url::to(['course/index'])?>">Courses</a></li>
        <li><a href="<?= Url::to('contact/index') ?>">Contacts</a></li>
=======
        <li><a href="<?= Url::to(['home/index'])?>">Home</a></li>
        <li><a href="<?= Url::to(['teacher/index'])?>">Teachers</a></li>
        <li><a href="<?= Url::to(['course/index'])?>">Courses</a></li>
        <li><a href="Contacts.html">Contacts</a></li>
>>>>>>> 1bdd7ed2996860a1af1c19270be47296ef945be2
        <li><a href="#">Login</a></li>
        <li><a href="#">Sign up</a></li>
    </ul>
</header>
<!-- Navbar end -->
<?= $content ?>
<!--Footer start-->
<footer class="z-depth-2">
    <div class="footer-menu">
        <a href="#">About us</a>
        <a href="#">Contact</a>
        <a href="#">Email</a>
        <div class="copyright">
            <p>© Ugandosiki 2020</p>
        </div>
    </div>
</footer>
<!--Footer end-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
