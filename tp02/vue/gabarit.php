<?php
/**
 * Created by PhpStorm.
 * User: blade
 * Date: 2017-10-24
 * Time: 09:29
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../styles/styles.css" type="text/css"> </head>
    <title><?=$titrePage; ?></title>

<body>
<!-- Bienvenue au header -->
<div class="py-5 text-center opaque-overlay" style="background-image: url(&quot;../images/ciel-nuit-03.jpg&quot;);">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-white">
                <h1 class="display-3 mb-4">L'univers des bandes dessinées</h1>
                <p class="lead mb-5">Tintin, Astérix et plusieurs autres font parties de nos rêves d'enfants. C'est dans ce repaire que la magie de l'imagination se tient. Notre site contient un grand évantail de tout les produits qui concerne la bandes dessinées "BD"&nbsp;
                    <br>Bienvenue à tous !</p>
            </div>
        </div>
    </div>
</div>

<?=$contenuSpecifique; ?>

<!-- Bienvenue au footer -->
<div class="bg-dark text-white" id="footer">
    <div class="container text-right">
        <div class="row">
            <div class="col-md-12">
                <p class="lead text-center text-center col-md-12 p-0">TP2 - Automne 2017
                    <br>Réalisé dans le cadre du cours 420-323-AL
                    <br>Cégep André-Laurendeau</p>
            </div>
            <div class="container"> </div>
            <div class="col-3 col-md-5 align-self-center text-right"> </div>
            <div class="col-4 col-md-1 align-self-center text-right">
                <a href="https://www.facebook.com" target="_blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a>
            </div>
            <div class="col-4 col-md-1 align-self-center">
                <a href="https://twitter.com" target="_blank"><i class="fa fa-fw fa-twitter fa-3x text-white"></i></a>
            </div>
            <div class="col-4 col-md-4 align-self-center text-right"> </div>
        </div>
        <div>
            <div class="text-center col-md-12 p-0">
                <p>© Copyright 2017 Équipe J-A-M - Tous droits réservées.</p>
            </div>
        </div>
    </div>
</div>
