<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{

//    public $basePath = '@webroot';
    public $baseUrl = '@web/template/worldforum/';

    public $css = [
        'css/bootstrap.min.css',
        'css/style.css',
        'css/media.css',
        'css/animate.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',
        'css/custom.css'

    ];
    public $js = [
        'https://www.googletagmanager.com/gtag/js?id=G-YQVS417P98',
        'js/bootstrap.min.js',
        'js/jquery.js',
        'js/wow.min.js',
    ];
    public $depends = [
//        'yii\bootstrap\BootstrapAsset',
//        'yii\web\YiiAsset',
    ];
}
