<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 2017-10-21
 * Time: 13:01
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./styles/styles.css" type="text/css"> </head>

<body>
<div class="py-5 text-center opaque-overlay" style="background-image: url(&quot;images/Clouds_over_the_Atlantic_Ocean.jpg&quot;);">
    <?php
    include("../include/header.inc.php");
    ?>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <h1 class="">INFORMATIONS DE BASE</h1>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-right">
                    <p>Titre</p>
                    <p>Auteur</p>
                    <p>URL du site</p>
                </div>
                <div class="col-md-6">
                    <form class="form-block" method="post" action="">
                        <input type="email" name="email" class="form-control">
                        <input type="email" name="email" class="form-control">
                        <input type="email" name="email" class="form-control"> </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4 text-center p-0 m-0">
                    <h4 class="p-5 m-0">Titre</h4>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3 text-center m-0">
                    <h4 class="m-0 p-5">Nb Pages</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-1 text-right"></div>
                <div class="col-md-8">
                    <form class="form-block" method="post" action="#">
                        <input type="text" name="input1" class="form-control">
                        <input type="text" name="input2" class="form-control">
                        <input type="text" name="input3" class="form-control">
                        <input type="text" name="input4" class="form-control">
                        <input type="text" name="input5" class="form-control">
                        <input type="text" name="input6" class="form-control"> </form>
                </div>
                <div class="col-md-3">
                    <form class="form-block" method="post" action="#">
                        <input type="text" name="inputAss1" class="form-control">
                        <input type="text" name="inputAss2" class="form-control">
                        <input type="text" name="inputAss3" class="form-control">
                        <input type="text" name="inputAss4" class="form-control">
                        <input type="text" name="inputAss5" class="form-control">
                        <input type="text" name="inputAss6" class="form-control"> </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <a class="btn btn-primary" action="makeTextInputField()">Plus de tomes</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <h1 class="">IMAGE DE LA COUVERTURE</h1>
                    <a class="btn btn-primary" action="#">Choisissez un fichier</a> <span>Aucun fichier choisi </span> </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <a class="btn btn-primary" href="">Ajouter la BD</a>
                    <a class="btn btn-primary" href="">Annuler</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <?php
    include("../include/footer.inc.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
