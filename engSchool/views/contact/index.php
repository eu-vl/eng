<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Contact';
?>



<section>
    <div class="contact-form">
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <div class="alert alert-success">
        Thank you for contacting us. We will respond to you as soon as possible.
    </div>

    <?php else: ?>

    <div class="row">
        <div class="col m3 l3"></div>
        <div class="col s12 m6 l6">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => false]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'subject') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 10]) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php \yii\widgets\ActiveForm::end() ?>
        </div>
        <div class="col s12 m5 l5"></div>
    </div>
    <?php endif; ?>
    </div>
</section>