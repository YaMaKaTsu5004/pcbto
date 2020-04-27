<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css?<?= filemtime('style.css'); ?>">
        <title>パソコンBTOパーツ選び放題！</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="header-right">
                <a class="login btn" href="login.php">ログイン</a>
            </div>
        </header>
        <div class="body">
<!--ここからページ-->
            <div class="top-wrapper">
                <div class="container top-top">

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
                            <li class="tab">F&Q</li>
                            <li class="tab">お問い合わせ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='main-wrapper'>
                <div class="container main">
                    <h1 class="top-page">トップページ</h1>
                    <h2 class="introduce h2">ご紹介</h2>
                    <h2 class="what-pc h2">どんなパソコンが作れるの？</h2>
                </div>
            </div>
        </div>
        <footer>

        </footer>
        <script src="script.js?<?= filemtime('script.js'); ?>"></script>
    </body>
</html>
