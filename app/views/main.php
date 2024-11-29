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
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Platform</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-block"></div>
    </div>

    <!--  -->
</body>
</html>