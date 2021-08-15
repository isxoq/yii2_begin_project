<?php


/* @var $this \yii\web\View */


use common\models\Branch;
use common\models\Contract;

$branchs = Branch::find()
    ->all();
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Filiallar bo'yicha summalar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Filial nomi</th>
                                <th>Jami shartnoma sum.</th>
                                <th>Jami bonuslar sum.</th>
                                <th>Qo'lga tegadigan sum.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($branchs as $key => $branch): ?>
                                <?php
                                $total_branch_summ = Contract::find()
                                    ->where(['branch_id' => $branch->id])
                                    ->sum('price');

                                $total_bonus_summ = Contract:: find()
                                    ->where(['branch_id' => $branch->id])
                                    ->sum('bonus');
                                $residue_branch_sum = $total_branch_summ - (($total_bonus_summ / 2));
                                ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $branch->name ?></td>
                                    <td><?= Yii::$app->formatter->asInteger($total_branch_summ) ?> <i> so'm</i></td>
                                    <td><?= Yii::$app->formatter->asInteger($total_bonus_summ) ?><i> so'm</i></td>
                                    <td>
                                        <span class="badge bg-success"><?= Yii::$app->formatter->asInteger($residue_branch_sum) ?> <i> so'm</i></span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
