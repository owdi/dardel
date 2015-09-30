<?php
session_start();

if(isset($_GET['langue']))
        {
            $_SESSION['langue'] = $_GET['langue'];
        }

include("system/constantes.php");
$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
$bdd->exec('SET NAMES utf8');
$req = $bdd->prepare('SELECT id,langue,nom,matiere,titre,description,image1_small,image2_small,image3_small FROM dardel WHERE langue= :language AND id=101 OR  langue= :language AND id=30 OR langue= :language AND id=61');
$req->execute(array('language' => $_GET['langue']));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Dardel</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/yamm.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/jqueryv213.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
   </head>
   <body>

  <?php include("system/menu.php"); ?>
  <?php include("system/slider-principal.php"); ?>


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
<div class="bloc-produits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                <div class="row">
                    <?php
        while ($donnees = $req->fetch())
        {
        echo '<div class="col-md-4"><div class="text-center"><img class="img-responsive" src="../'.$donnees['image1_small'].'"><h3>'.$donnees['nom'].'</h3><p>'.$donnees['titre'].'</p></div></div>';
        }
        $req->closeCursor();
        ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("system/footer.php");

if($_GET['langue'] != "fr" AND $_GET['langue'] != "uk" )

{ ?>
<!-- Modal -->
<div class="modal fade" id="myModalbis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Langue / Language</h4>
      </div>
      <div class="modal-body">
        <p>Choisissez votre langue / Choose your language :</p>
        <a href="http://www.dardel.com/new/?langue=fr" class="flag-container">
            <div class="flag flag-fr"></div>
            <p>Français</p>
        </a>
        <a href="http://www.dardel.com/new/?langue=uk" class="flag-container">
            <div class="flag flag-gb"></div>
            <p>English</p>
        </a>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?php } ?>
</body>
</html>