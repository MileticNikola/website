<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 12. 04. 20
 * Time: 23:22
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='dns-prefetch' href='//fonts.gstatic.com'/>
    <meta name="designer" content="duplxey - https://duplxey.com/"/>
    <?php
    if(!empty($pageData)){
        if($pageData['title']){
            ?>
            <title><?=$pageData['title']?></title>
            <?php
        }
        if($pageData['meta']['description']){
            ?>
            <meta name="description" content="<?=$pageData['meta']['description']?>"/>
            <?php
        }
        if($pageData['meta']['keywords']){
            ?>
            <meta name="keywords" content="<?=$pageData['meta']['keywords']?>"/>
            <?php
        }
        if($pageData['og']['title']){
            ?>
            <meta property="og:title" content="<?=$pageData['og']['title']?>"/>
            <?php
        }
        if($pageData['og']['description']){
            ?>
            <meta property="og:description" content="<?=$pageData['og']['description']?>"/>
            <?php
        }
        if($pageData['og']['image']){
            ?>
            <meta property="og:image" content="<?=$pageData['og']['image']?>"/>
            <?php
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico"/>
    <link rel="stylesheet" href="../css/color-palette.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/bootstrap-fixes.css">
    <link rel="stylesheet" href="../css/style.css">

    <script>$(document).ready(function() {$('img').on('dragstart', false);});</script>

</head>
<body>
