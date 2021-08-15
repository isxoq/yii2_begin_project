<?php

/* @var $this soft\web\View */

use common\models\Branch;
use common\models\Client;
use common\models\Contract;
use common\models\Country;
use common\models\University;
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name;

$branch_count = Branch::find()
    ->count();
$user_count = User::find()
    ->count();
$county_count = Country::find()
    ->count();
$university_count = University::find()
    ->count();
$client_count = Client::find()
    ->count();
$contract_count = Contract::find()
    ->where(['status_id' => Contract::STATUS_ACCEPTED])
    ->orWhere(['status_id' => Contract::STATUS_WAITING])
    ->count();

$contract_count_success = Contract::find()
    ->where(['status_id' => Contract::STATUS_ACCEPTED])
    ->count();

$contract_count_waiting = Contract::find()
    ->where(['status_id' => Contract::STATUS_WAITING])
    ->count();

$total_bonus = Contract::find()
    ->sum('bonus');

$total_contract_sum = Contract::find()
    ->sum('price');

$residue = $total_contract_sum - (($total_bonus) / 2);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-code-branch"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="<?= Url::to(['/branch']) ?>">Filiallar</a></span>
                        <span class="info-box-number"><?= $branch_count ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fa fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="<?= Url::to(['/usermanager/user']) ?>">Xodimlar</a></span>
                        <span class="info-box-number"><?= $user_count ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-globe-asia"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="<?= Url::to(['/country']) ?>">Davlatlar</a></span>
                        <span class="info-box-number"><?= $county_count ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-university"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="<?= Url::to(['/university']) ?>">Unversitetlar</a></span>
                        <span class="info-box-number"><?= $university_count ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="<?= Url::to(['/client']) ?>">Mijozlar</a></span>
                        <span class="info-box-number"><?= $client_count ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-maroon"><i class="nav-icon fas fa-file-signature"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="<?= Url::to(['/contract']) ?>">Shartnomalar</a></span>
                        <span class="info-box-number"><?= $contract_count ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-warning"><i class="fas fa-user-clock"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a
                                    href="<?= Url::to(['/contract', 'ContractSearch[status_id]' => Contract::STATUS_WAITING]) ?>">Shartnomalar (Kutish.rej)</a></span>
                        <span class="info-box-number"><?= $contract_count_waiting ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-success"><i class="fas fa-user-check"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a
                                    href="<?= Url::to(['/contract', 'ContractSearch[status_id]' => Contract::STATUS_ACCEPTED]) ?>">Shartnomalar (Tasdiq.)</a></span>
                        <span class="info-box-number"><?= $contract_count_success ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                        <span class="info-box-icon bg-gradient-indigo">
                            <i class="fa fa-file-invoice-dollar"></i>
                        </span>

                    <div class="info-box-content">
                            <span class="info-box-text">
                                Jami shartnoma summasi
                            </span>
                        <span class="info-box-number"><?= Yii::$app->formatter->asInteger($total_contract_sum) ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                        <span class="info-box-icon bg-olive">
                            <i class="fa fa-box"></i>
                        </span>

                    <div class="info-box-content">
                            <span class="info-box-text">
                                Jami bonuslar summasi
                            </span>
                        <span class="info-box-number"><?= Yii::$app->formatter->asInteger($total_bonus) ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                        <span class="info-box-icon bg-gradient-navy">
                            <i class="fa fa-hand-holding-usd"></i>
                        </span>

                    <div class="info-box-content">
                            <span class="info-box-text">
                               Qo'lga tegadigan summa
                            </span>
                        <span class="info-box-number"><?= Yii::$app->formatter->asInteger($residue) ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
</section>
