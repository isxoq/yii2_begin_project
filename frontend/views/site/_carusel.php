<?php

use yii\helpers\Url;

?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/template/worldforum/images/banner2.jpg" class="d-block w-100" alt="world forum uz">
            <div class="carousel-caption d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-text">
                                <h1 class="wow animate__animated animate__fadeInLeft">Rossiyaning eng yaxshi universitetlaridan biriga kirishni xohlaysizmi?</h1>
                                <h1 class="span wow animate__animated animate__fadeInLeft">Worldforum.uz</h1><h2 class="wow animate__animated animate__fadeInLeft"> xizmati bilan oson erishing!</h2>
                                <a href="<?=Url::to(['site/kazak-programms'])?>"><button class="wow animate__animated animate__heartBeat" data-wow-delay="2s">Batafsil</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/template/worldforum/images/banner1.jpg" class="d-block w-100" alt="world forum uz">
            <div class="carousel-caption d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-text">
                                <h1 class="wow animate__animated animate__fadeInLeft">Endi siz Worldforum.uz orqali </h1>
                                <h2 class="wow animate__animated animate__fadeInLeft"><span>Qozog’iston, </span><span>Qirg’iziston, </span><span>Turkiya, </span><span>Rossiya, </span><span>Koreya, </span><span>Yaponiya </span> davlatlaridagi  top universitetlardan birida o'qishingiz mumkin</h2>
                                <a href="<?=Url::to(['site/kazak-programms'])?>"><button class="wow animate__animated animate__heartBeat" data-wow-delay="2s">Batafsil</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/template/worldforum/images/banner.jpg" class="d-block w-100" alt="world forum uz">
            <div class="carousel-caption d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-text">
                                <h1 class="wow animate__animated animate__fadeInLeft">Ayni vaqtda</h1>
                                <h2 class="wow animate__animated animate__fadeInLeft"><span>Qozog’iston, </span><span>Qirg’isizton, </span><span>Tojikiston, </span><span>Rossiya, </span> davlatlarida qabul davom etmoqda shoshiling!</h2>
                                <a href="<?=Url::to(['site/kazak-programms'])?>"><button class="wow animate__animated animate__heartBeat" data-wow-delay="2s">Batafsil</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Oldingi</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Keyingi</span>
    </button>
</div>