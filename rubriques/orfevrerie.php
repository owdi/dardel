<?php
session_start();
 include("../system/constantes.php");
$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
$bdd->exec('SET NAMES utf8');
$req = $bdd->prepare('SELECT * FROM menu WHERE Rubriques=\'ORFÈVRERIE\' AND langue= :language OR Rubriques=\'CUTLERY BOXES\' AND langue= :language');
$req->execute(array('language' => $_SESSION['langue']));
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
            <div class="col-md-4">
                <div class="ligne-centre"></div>
            </div>
            <div class="col-md-4">
                <div class="text-center"> <span class="quality-dardel">Quality </span>  with  <span class="quality-dardel"> Dardel</span></div>
            </div>
            <div class="col-md-4">
                <div class="ligne-centre"></div>
            </div>
        </div>
    </div>
<?php include("../system/bloc-produits.php"); ?>
<?php include("../system/footer.php"); ?>
</body>
</html>