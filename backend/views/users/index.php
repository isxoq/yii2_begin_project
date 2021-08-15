<?php

use common\models\Branch;
use common\models\User;
use soft\grid\GridView;
use soft\helpers\Html;

/* @var $this soft\web\View */
/* @var $searchModel common\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Barcha xodimlar');
$this->params['breadcrumbs'][] = $this->title;
$this->registerAjaxCrudAssets();

$data = map(Branch::find()->all(), 'id', 'name');
?>
<?= GridView::widget([
    'id' => 'crud-datatable',
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'toolbarTemplate' => '{create}{refresh}',
    'toolbarButtons' => [
        'create' => false
    ],
    'bulkButtonsTemplate' => '{delete}',
    'bulkButtons' => [
        'delete' => [
            /** @see soft\widget\button\BulkButton for other configurations */
        ],
    ],
    'cols' => [
//                    'id',
        'username',
//        'auth_key',
//        'password_hash',
//        'password_reset_token',
        //'email:email',
//        'status',
        //'created_at',
        //'updated_at',
        'firstname',
        'lastname',
        [
            'attribute' => 'type_id',
            'format' => 'raw',
            'value' => 'typeName',
            'filter' => User::types()
        ],
        [
            'attribute' => 'branch_id',
            'format' => 'raw',
            'value' => 'branch.name',
            'label' => 'Filial nomi',
            'filter' => $data,
        ],
        'actionColumn' => [
            'template' => '{view}{delete}'
        ],
    ],
]); ?>
    