<?php
session_start();
include("../system/constantes.php");
$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
$bdd->exec('SET NAMES utf8');
$req = $bdd->prepare('SELECT * FROM dardel WHERE matiere= :mat');
$req->execute(array('mat' => $_GET['matiere']));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>Dardel</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../css/yamm.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://www.dardel.com/new/js/jqueryv213.min.js"></script>
    <script src="http://www.dardel.com/new/js/bootstrap.min.js"></script>
</head>
<body>

<?php include("../system/menu.php"); ?>
<?php include("../system/slider-principal.php"); ?>

<div class="container">
    <div class="row">
        <?php if($_SESSION['langue'] == "fr"){ ?>
        <div class="col-md-12">
                <h2>Service Commercial</h2>
        </div>
        <div class="col-md-offset-1 col-md-11">
                <h3>Directeur Commercial et Marketing</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Guillaume Fleischer <a href="mailto:guillaume.fleischer@dardel.com>">guillaume.fleischer@dardel.com></a></p>
                <h3>En charge des grands comptes</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Martial Collomb <a href="mailto:martial.collomb@dardel.com">martial.collomb@dardel.com</a></p>
                <h3>En charge des détaillants Paris, Bretagne, Nord France</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Jean Luc Spitz <a href="mailto:jeanlucspitz@gmail.com">jeanlucspitz@gmail.com</a></p>
                <h3>En charge des détaillants Sud France</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Jean Pierre Laffont <a href="mailto:jeanpierrelaffont@gmail.com">jeanpierrelaffont@gmail.com</a></p>
                <h3>En charge des ventes siege à Lognes</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Nathalie Herve <a href="mailto:nathalie.herve@dardel.com">nathalie.herve@dardel.com</a></p>
                <h3>En charge des ventes Export</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Siran Mien <a href="mailto:siran.mien@dardel.com">siran.mien@dardel.com</a></p>
                <h3>En charges des Ventes Show room Paris</h3>
                <p>Prudence Collomb</p>
                <p>Martine Imbert</p>
        </div>
        <div class="col-md-12">
                <h2>Export</h2>
        </div>
        <div class="col-md-offset-1 col-md-11">
                <h3>Belgique</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Martial Collomb <a href="mailto:martial.collomb@dardel.com">martial.collomb@dardel.com</a></p>
                <h3>Suisse - Allemagne - Autriche</h3>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Michel Ihsane <a href="mailto:michel.ihsane@dardel.com">michel.ihsane@dardel.com</a></p>
                <h3>USA & Canada</h3> 
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Swisspackaging New York <a href="mailto:nehin@swiwsspackaging.com">nehin@swiwsspackaging.com</a></p>
        </div>
            <?php }else if($_SESSION['langue'] == "uk"){ ?>
        <div class="col-md-12">
                <h1>Sales organization</h1>
        </div>
        <div class="col-md-offset-1 col-md-11">
                <h2>Sales and Marketing Director</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Guillaume Fleischer <a href="mailto:guillaume.fleischer@dardel.com>">guillaume.fleischer@dardel.com></a></p>
                <h2>In charge of Large accounts</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Martial Collomb <a href="mailto:martial.collomb@dardel.com">martial.collomb@dardel.com</a></p>
                <h2>In charge of retailers sales for Paris and North of France</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Jean Luc Spitz <a href="mailto:jeanlucspitz@gmail.com">jeanlucspitz@gmail.com</a></p>
                <h2>In charge of retailers sales for South of France</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Jean Pierre Laffont <a href="mailto:jeanpierrelaffont@gmail.com">jeanpierrelaffont@gmail.com</a></p>
                <h2>In charge of sale offices to Lognes</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Nathalie Herve <a href="mailto:nathalie.herve@dardel.com">nathalie.herve@dardel.com</a></p>
                <h2>In charge of export</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Siran Mien <a href="mailto:siran.mien@dardel.com">siran.mien@dardel.com</a></p>
        </div>
        <div class="col-md-12">
                <h1>Foreign countries</h1>
        </div>
        <div class="col-md-offset-1 col-md-11">
                <h2>Belgium</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Martial Collomb <a href="mailto:martial.collomb@dardel.com">martial.collomb@dardel.com</a></p>
                <h2>Austria- Germany - Switzerland</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Michel Ihsane <a href="mailto:michel.ihsane@dardel.com">michel.ihsane@dardel.com</a></p>
                <h2>USA & Canada</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>   Swisspackaging New York <a href="mailto:nehin@swiwsspackaging.com">nehin@swiwsspackaging.com</a></p>
        </div>
            <?php } ?>
    </div>
</div>

<?php include("../system/footer.php"); ?>
</body>
</html>