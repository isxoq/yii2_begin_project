<?php/* @var $this yii\web\View *//* @var $model backend\modules\translationmanager\models\SourceMessage */$this->title = "Yangi tarjima qo'shish";$this->params['breadcrumbs'][] = ['label' => 'Translations', 'url' => ['index']];$this->params['breadcrumbs'][] = $this->title;?><?= $this->render('_form', [    'model' => $model,]) ?>