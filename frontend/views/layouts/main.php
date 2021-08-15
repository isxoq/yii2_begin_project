<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Chet elda oliy ta'lim! O'qishga Grantlar asosida qabul qilish! Til kursi | Bakalavr | Magistratura O'qishga kirish kafolati!">
    <meta name="keywords"
          content="world, forum, world forum, world forum uz, chet el, oliy ta'lim, o'qish, grant, til kurlari, bakalavr, magistratura">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="World Forum Uz Rasmiy Web Sayti">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://worldforum.uz/">
    <meta property="og:site_name" content="worldforum.uz">
    <meta property="og:description"
          content="Shohjahon Mirakov tomonidan ishlab chiqilgan. Telegram: @Mirakov_Shohjahon"/>
    <meta property="og:url" content="https://besmartest.uz/">

    <?php $this->registerCsrfMetaTags() ?>
    <title>Worldforum.uz Rasmiy Web Sahifasi</title>
    <?php $this->head() ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/template/worldforum/images/apple-touch-icon.png">
    <link rel="icon" type="/template/worldforum/image/png" sizes="32x32" href="/template/worldforum/images/favicon-32x32.png">
    <link rel="icon" type="/template/worldforum/image/png" sizes="16x16" href="/template/worldforum/images/favicon-16x16.png">
    <link rel="manifest" href="/template/worldforum/images/site.webmanifest">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-YQVS417P98');
    </script>
</head>
<body>
<?php $this->beginBody() ?>
<div class="content">
    <?= $this->render('_header') ?>
    <?=$content?>
    <?=$this->render('_footer')?>
</div>
<?php $this->endBody() ?>
<script>
    new WOW().init();
</script>
</body>
</html>
<?php $this->endPage() ?>
