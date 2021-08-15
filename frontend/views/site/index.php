<?php
/*
 * @author Shukurullo Odilov
 * @link telegram: https://t.me/yii2_dasturchi
 * @date 15.07.2021, 10:46
 */

/* @var $this soft\web\View */

use soft\helpers\Url;
use yii\helpers\Html;

$this->title = Yii::$app->name;
$this->params['breadcrumbs'][] = $this->title;

?>

<?=$this->render('_carusel')?>
<?=$this->render('_help')?>
<?=$this->render('_our_universities')?>
<?=$this->render('_our_programms')?>
<?=$this->render('_top_questions')?>
<?=$this->render('_registratsiya')?>
