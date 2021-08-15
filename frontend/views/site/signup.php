<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Ro'yhatdan o'tish";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Iltimos, quyidagilarni to'ldiring:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php Pjax::begin([
                // Опции Pjax
            ]);?>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                    <?= Html::submitButton("Ro'yhatdan o'tish", ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
        </div>
        
        <?php ActiveForm::end(); ?>
        <?php Pjax::end(); ?>
    </div>
</div>

</div>