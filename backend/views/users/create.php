<?php


/* @var $this soft\web\View */
/* @var $model common\models\User */

$this->title = Yii::t('site', 'Create a new');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>