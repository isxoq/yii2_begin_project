<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="sign-div wow animate__animated animate__fadeInUp">

        <div class="title" style="padding-top: 25px"><?= Html::encode($this->title) ?></div>
        <p style="margin-left: 95px">Tizimga kirish uchun login va parolni kiriting!</p>

        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>


                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'buttons', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>