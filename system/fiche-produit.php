	<?php
    session_start();
	 include("constantes.php");
	$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
    $bdd->exec('SET NAMES utf8');
	$req = $bdd->prepare('SELECT id,langue,nom,matiere,titre,description,image1_small,image1_large,image2_small,image2_large,image3_small,image3_large,miniature1,miniature2,miniature3,caracteristiques,coloris1,coloris2,coloris3,coloris4,coloris5,coloris6,coloris7,coloris8 FROM dardel WHERE langue= :language AND id = :identifiant');
	$req->execute(array('identifiant' => $_GET['id'], 'language' => $_SESSION['langue']));
	$donnees = $req->fetch();
	?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Dardel</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css " />
    <link rel="stylesheet" type="text/css" href="../css/yamm.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="../js/jqueryv213.min.js"></script>
    <script type="text/javascript" src="../js/jquery.zoom.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<?php include("../system/menu.php"); ?>
    <div class="container">
    <!--     <div class="row">
            <div class="col-md-12">
                <img  class="img-responsive" src="../images/leather1140x430.jpg">
            </div>
        </div> -->
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
    <div class="bloc-fiche-produit">
    	<div class="container">
    		<div class="row">
                <div class="col-md-12">
    <?php
                    echo '<h2>'.$donnees[matiere].'</h2><h1>'.$donnees[nom].'</h1><p>'.$donnees[titre].'</p><br /><p>'.$donnees[description].'</p>';
    ?>
                </div>
    			<div class="col-md-5">
    				<span class='zoom'>
    <?php
    				echo '<div class="text-center"><img src="../../'.$donnees[image1_large].'" /><p>'.$donnees[nom].'</p></div>';
    ?>
    				</span>
    			</div>
                <div class="col-md-7">
    <?php
                echo $donnees[caracteristiques];
    ?>
                </div>
                <div class="col-md-12">
    <?php
                    echo '<a onclick="changePic(\'../../'.$donnees[image1_large].'\')"><img class="miniature" src="../../'.$donnees[miniature1].'" /></a><a onclick="changePic(\'../../'.$donnees[image2_large].'\')"><img class="miniature" src="../../'.$donnees[miniature2].'" /></a><a onclick="changePic(\'../../'.$donnees[image3_large].'\')"><img class="miniature" src="../../'.$donnees[miniature3].'" /></a>';
    ?>
                </div>

                <div class="col-md-12">
                    <h3 class="text-center">Coloris</h3>
                </div>
    <?php

            for($i=1;$i<9;$i++)
                {
                echo '
                <div class="col-md-3">
                    <div class="text-center">
                            <img src="../../'.$donnees['coloris'.$i].'" />
                    </div>
                </div>';
                }
            
    ?>
    		</div>
    	</div>
    </div>

<?php include("../system/footer.php"); ?>
</body>
</html>