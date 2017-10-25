<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 2017-10-20
 * Time: 20:18
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../styles/styles.css" type="text/css"> </head>

<body>
<div class="py-5 text-center opaque-overlay" style="background-image: url(&quot;../images/ciel-nuit-03.jpg&quot;);">
<?php
include("../include/header.inc.php");
?>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="d-block img-fluid img-responsive col-1" src="../images/images_11.jpg">
            </div>
            <div class="col-md-6 border">
                <p class="py-3">Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 border border-info">
                <table class="table">
                    <thead>
                    <tr>
                        <th># TOME</th>
                        <th>Titre</th>
                        <th>Nombre de Pages</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>242</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>234</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Control Freak</td>
                        <td>212</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a class="btn btn-primary btn-block" href="">Menu Principal</a>
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
