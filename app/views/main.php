<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="/public/src/css/header.css">
    <link rel="stylesheet" href="/public/src/css/main.css">
    <title>AngroBit</title>
</head>
<body>
    <!-- Conntecting header -->
    <?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/blocks/header.php';
    ?>

    <!-- Hero block -->
    <div class="hero">
        <div class="text">
            <h2>Modern agriculture </h2>
            <h3>starts here</h3>
        </div>

        <div class="shops">
            <img src="/public/src/images/app_store.png" alt="AppStore">
            <img src="/public/src/images/google_play.png" alt="Google Play">
        </div>
    </div>

    <!-- Menu block -->
    <div class="menu">
        <div class="top-block"></div>
        <div class="container">
            <div class="nav">
                <ul>
                    <li><a href="#">Game</a></li>
                    <img src="public/src/images/border_bottom.png">
                    <li><a href="#">Mobile App</a></li>
                    <img src="public/src/images/border_bottom.png">
                    <li><a href="#">Platform</a></li>
                    <img src="public/src/images/border_bottom.png">
                    <li><a href="#">Shop</a></li>
                    <img src="public/src/images/border_bottom.png">
                </ul>
            </div>
        </div>
        <div class="bottom-block"></div>
    </div>

    <!-- News block -->
    <div class="news">
        <img class="deco" src="/public/src/images/deco_news.png">
        <div class="block-name">
            <img src="/public/src/images/puls_left.png">
            <h2>News & Updates</h2>
            <img src="/public/src/images/puls_right.png">
        </div>

        <div class="container">
            <div class="block">
                <img src="/public/src/images/info.png">
                <img src="/public/src/images/facebook.png">
                <img src="/public/src/images/youtube.png">
                <img src="/public/src/images/twitter.png">
            </div>

            <div class="block-center">
                <img src="/public/src/images/news_block_top.png">
                <img  class="img" src="/public/src/images/img.png">
                <a href=""></a>
                    <img src="/public/src/images/block_news_bottom.png">
                </a>
            </div>

            <div class="block">
                <img src="/public/src/images/tiktok.png">
                <img src="/public/src/images/reddit.png">
                <img src="/public/src/images/discord.png">
                <img src="/public/src/images/instagram.png">
            </div>
        </div>
        <img class="deco deco-bottom" src="/public/src/images/deco_news.png">
    </div>
</body>
</html>