<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css?<?= filemtime('style.css'); ?>">
        <title>パソコンBTOパーツ選び放題！</title>
        <script src="https://kit.fontawesome.com/efbe0aca74.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="header-right">
                <a class="login btn" href="login.php">ログイン</a>
            </div>
        </header>
        <div class="body">
            <div class="top-wrapper">
                <div class="container">

                </div>
            </div>
            <div class="tab-wrapper">
                <div class="tab-top"></div>
                <div class="container menus">
                    <div class="menu">
                        <span class="menu-name" id='#menu-1'>ホーム</span>
                        <ul class="tabs" id='menu-1'>
                            <li class="tab"><a href="index.php">トップページ</a></li>
                        </ul>
                    </div>
                    <div class="menu">
                        <span class="menu-name" id='#menu-2'>ご注文はこちらから！</span>
                        <ul class="tabs" id='menu-2'>
                            <li class="tab"><a href="tyumon.php">注文へ</a></li>
                        </ul>
                    </div>
                    <div class="menu">
                        <span class="menu-name" id='#menu-3'>お問い合わせ</span>
                        <ul class="tabs" id='menu-3'>
                            <li class="tab">え</li>
                        </ul>
                    </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='main-wrapper'>
                <div class="container main">
                    <h2 class="h2">マザーボード</h2>
                    <div class="parts-container">
                        <span class='left-slide slide-btn'><i class="fas fa-angle-double-left"></i></span>
                        <span class='right-slide slide-btn'><i class="fas fa-angle-double-right"></i></span>
                    </div>
                    <a class="next btn">次へ</a>
                </div>
            </div>
        </div>
        <footer>

        </footer>
        <script src="script.js"></script>