<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
				<title>Dardel</title>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
				<link rel="stylesheet" media="screen" type="text/css" title="css" href="curve_test.css" />
				<script type="text/javascript" src="script/jquery-1.5.2.min.js"></script> 
				<script type="text/javascript" src="script/common.js"></script>
				<script type='text/javascript' src='script/jquery.jqzoom-core.js'></script> 			
	</head>
	
	
	<body>
                          
			<?php
                        include('constantes.php');
			$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
			$req = $bdd->prepare('UPDATE dardel SET description = :modif_desc, titre = :modif_titre WHERE id = :id_produit AND langue=\'fr\'');
			$req->execute(array(
			'modif_titre'=> $_POST['modif_titre'],
			'modif_desc' => $_POST['modif_desc'],
			'id_produit' => $_POST['id_produit'],
			));
			?>

	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><center><p style=" font-family:calibri;">Les modifications ont bien été effectuées !</p><br/><br/>				
	
	<form method="POST" action="formulaire_admin.php">

<input type="HIDDEN" name="nom" value="Christian">
<input type="HIDDEN" name="pass" value="BB887YV">

		<br/>
		<input type="submit" value="Retour"/> </center>
		</form>
	<?php
	

		
		?>

	
	</body>
	
	
	
</html>