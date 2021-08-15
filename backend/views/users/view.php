<?php


/* @var $this soft\web\View */
/* @var $model common\models\User */

$this->title = $model->firstname;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barcha xodimlar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<?= \soft\widget\bs4\DetailView::widget([
    'model' => $model,
    'panel' => $this->isAjax ? false : [],
    'toolbar' => [
        'template' => '{delete}',
    ],
    'attributes' => [
//              'id',
        'username',
//              'auth_key',
//              'password_hash',
//              'password_reset_token',
//        'email',
//              'status',
//              'updated_at',
        'firstname',
        'lastname',
        'typeName',
        'branch.name',
        'created_at',
    ],
]) ?>