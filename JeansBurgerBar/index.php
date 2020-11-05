<?php
    header("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE HTML>
<head>
    <title>
        Джинс Бургер Бар | Доставка бургеров в г. Липецке
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" /> 
    <meta name="keywords" content="" />
    <!-- CSS внутренние стили -->
    <link rel="stylesheet" href="/css/main.css"></link>
    <link rel="stylesheet" href="/css/head.css"></link>
    <link rel="stylesheet" href="/css/basket.css"></link>
    <link rel="stylesheet" href="/css/menu.css"></link>
    <link rel="stylesheet" href="/css/cart.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    <!-- jQuery -->
    <script src="/js/jQuery.min.js" type="text/javascript"></script>
    <!-- плагин -->
    <!-- CSS необходимое для работы плагина -->
    <!-- js мой код -->
    <script src="/js/change_count.js" type="text/javascript"></script>
    <script src="/js/categories.js" type="text/javascript"></script>
    <script src="/js/pc_basket_visible.js" type="text/javascript"></script>
    <script src="/js/controller.js" type="text/javascript"></script>
</head>
<body> 
    <?php require ('php/menu.php') ?>

    <?php require ('php/head.php') ?>
    <?php require ('php/basket.php') ?>
</body>