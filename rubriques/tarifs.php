<?php
session_start();
include("../system/constantes.php");
$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
$bdd->exec('SET NAMES utf8');
//$req = $bdd->prepare('SELECT * FROM dardel WHERE matiere= :mat');
//$req->execute(array('mat' => $_GET['matiere']));
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
			<div class="col-md-12">
				<p>
					<h2>Espace de téléchargement des tarifs :</h2>
				</p>
			</div>
		</div>
		<div class="row">
				<div class="col-md-12">
					<?php 
if(isset($_SESSION['nom']) AND isset($_SESSION['pass'])){
	include("../system/downloader.php"); } 
elseif (isset($_POST['nom']) AND isset($_POST['pass'])) { 

	$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
	$bdd->exec('SET NAMES utf8');
	$req = $bdd->prepare('SELECT client,mdp FROM administration WHERE client = :identifiant');
	$req->execute(array('identifiant' => $_POST['nom']));
	$donnees = $req->fetch();
	if($_POST['pass'] === $donnees['mdp']){
	$_SESSION['nom'] = $_POST['nom'];
	$_SESSION['pass'] = $_POST['pass'];
	include("../system/downloader.php");}
	else echo "erreur authentification";
?>
				</div>
			</div>

<?php }else{?>
<script type="text/javascript">
		$(document).ready(function(){
		$('#modalTarifs').modal();
		});
</script>
				<!-- Modal vers page tarifs -->
				<div class="modal fade" id="modalTarifs" tabindex="-1" role="dialog" aria-labelledby="modalTarifsLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="modalTarifsLabel">Merci de vous authentifier</h4>
							</div>
							<div class="modal-body">
								<form action="http://www.dardel.com/new/rubriques/tarifs.php" method="post">
										<table>
										<tr><td><label for="nom">Identifiant</label> :</td> <td><input type="text" name="nom" value="" id="nom"/></td></tr>
										<tr><td><label for="pass">Mot de passe</label> :</td> <td><input type="password" name="pass" value="" id="pass"/></td></tr>
										</table>
										<input type="submit" value="valider"/>
								</form>
							</div>
							<div class="modal-footer">
								<p>Si vous n'avez pas d'identifiants cliquez ici : <a href="formulaire.php"> Inscription</a></p>
<!--                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
							</div>
						</div>
					</div>
				</div>
<?php } ?>
						<div class="row">
							<div class="col-md-12">
								<p> Télécharger ADOBE READER : </p> <a href="../download/AcrobatReaderSetup.exe"><img src="../images/pdf.png"/></a>
							</div>
						</div>
<?php include("../system/footer.php"); ?>
</body>
</html>