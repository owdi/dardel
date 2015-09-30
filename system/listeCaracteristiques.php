<?php
	$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
    $bdd->exec('SET NAMES utf8');
	$req = $bdd->prepare('SELECT nom,id,caracteristiques FROM dardel WHERE langue= \'fr\' AND nom = :extractCarac');
	$req->execute(array('extractCarac' => $_POST['extractCarateristiques']));
	$donnees = $req->fetch();
	?>
	<form method="post" action="formulaire_admin.php">
	<input type="HIDDEN" name="nom" value="Christian">
	<input type="HIDDEN" name="pass" value="BB887YV">
	<input type="HIDDEN" name="itemIdModif" value="<?php echo $donnees[id];?>">
	<textarea cols="150" rows="30" name="textareaCarac">
					<?php echo $donnees[caracteristiques];?>	
	</textarea>
	<br><br>
	<button type="reset" value="Reset">Annuler</button>
	<input type="submit" name="modification" value="Modifier">
	</form>
	<?php
	$req->closeCursor();
	?>