<?php

namespace backend\modules\usermanager\controllers;

use backend\modules\usermanager\models\search\UserSearch;
use backend\modules\usermanager\models\User;
use soft\web\SoftController;
use Yii;

class UserController extends SoftController
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }

    //<editor-fold desc="CRUD" defaultstate="collapsed">

    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @throws \yii\base\Exception
     */
    public function actionCreate()
    {
        $model = new User();
        $model->scenario = User::SCENARIO_CREATE_BY_ADMIN;
        $model->status = User::STATUS_ACTIVE;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->password_hash = Yii::$app->security->generatePasswordHash($model->password);
            $model->auth_key = Yii::$app->security->generateRandomString();
            if ($model->save(false)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', ['model' => $model]);
    }

    /**
     * @throws \yii\base\Exception
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->status = User::STATUS_ACTIVE;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if (!empty($model->password)) {
                $model->password_hash = Yii::$app->security->generatePasswordHash($model->password);
                $model->auth_key = Yii::$app->security->generateRandomString();
            }

            if ($model->save(false)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->ajaxCrud->viewAction($model);
    }

    //</editor-fold>

    /**
     * @return User
     * @throws \yii\web\NotFoundHttpException
     */
    private function findModel($id)
    {
        $model = User::findOne($id);
        if ($model == null) {
            not_found();
        }
        return $model;
    }

}
