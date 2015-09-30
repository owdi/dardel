<!DOCTYPE html>
	<head>
	<title>Dardel</title>
	<meta charset=utf-8 />
	<link rel="stylesheet" media="screen" type="text/css" title="css" href="curve_test.css" />
	<script type="text/javascript" src="script/jquery-1.5.2.min.js"></script> 
	<script type="text/javascript" src="script/common.js"></script>
	<script type='text/javascript' src='script/jquery.jqzoom-core.js'></script> 
			        
	</head>
	
	
	<body>
<?php include("constantes.php");?>
	<?php
		if(isset($_POST['nom']) AND isset($_POST['pass']))
		{
			if((($_POST['nom'] == 'Christian') AND ($_POST['pass'] == 'BB887YV'))OR (($_POST['nom'] == 'Nathalie') AND ($_POST['pass'] == 'Ven2011')))
			{
			?>
				<div class="formulaire_admin">

				<center><a href="index.php"><img src="dardel.png" alt="photo"/></a></center>
		
		<form method="post" action="admin.php">

		<fieldset>

		<legend>Outil de création d'identifiants</legend>
                <input type="HIDDEN" name="nom" value="CHE13000">
                <input type="HIDDEN" name="pass" value="D1895P">
		<label for="username">Code client à créer :</label><br />
		<input type="text" name="username" /><br />
		
		<label for="password">Password à créer :</label><br />
		<input type="password" name="password" /><br />
		<br/>
		<br/>
		<input type="submit" value="Valider">   
		</fieldset>
		</form>
		
		<fieldset>
		<legend> outil d'extract de la bases "users" </legend>
		
		<form method="post" action="formulaire_admin.php">
		
		<input type="HIDDEN" name="nom" value="Christian">
		<input type="HIDDEN" name="pass" value="BB887YV">
		
		       <label for="extract">Choix ?      </label>
		<select name="extract" id="extract">
			<option value="1">Extraire</option>
			<option value="2">Fermer</option>
		</select>
		<br/><br/>
		<input type="submit" value="Valider">
		</form>

		<?php 
		if(isset($_POST['extract']))
		{
			if($_POST['extract'] == 1)
			{
		 include("tableau_users.php");
		}
		else
		{
		echo " ";
		}
		}
		else {echo '';}
		?>
		</fieldset>
		<fieldset>
		<legend> outil de modifications des caracteristiques </legend>
		<?php
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
		$bdd->exec('SET NAMES utf8');
		$req = $bdd->query('SELECT nom,id,caracteristiques FROM dardel WHERE langue= \'fr\'');
			?>
			<form method="post" action="formulaire_admin.php">
	
			<input type="HIDDEN" name="nom" value="Christian">
			<input type="HIDDEN" name="pass" value="BB887YV">
				<select name="extractCarateristiques" id="extractCarateristiques">
				<?php
				while ($donnees = $req->fetch())
				{
				
				?>
				<option><?php echo $donnees['nom'];?></option>

				<?php
				}
				?>
				</select>
				<input type="submit" value="Valider"> 
			</form>
			
		<?php
		$req->closeCursor();
		if(isset($_POST['extractCarateristiques']))
		{
			if($_POST['extractCarateristiques'] != '')
			{
				include("listeCaracteristiques.php");
			}
		else
		{
		echo " ";
		}
		}
		else {echo '';}
/* SUITE MODIF*/
		if(isset($_POST['modification']))
		{
			if($_POST['modification'] === 'Modifier' AND $_POST['itemIdModif'] != 0)
			{

			$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
			$bdd->exec('SET NAMES utf8');
			$req = $bdd->prepare('UPDATE dardel SET caracteristiques = :modifCarac WHERE id = :idProduit AND langue=\'fr\'');
			$req->execute(array(
			'modifCarac'=> $_POST['textareaCarac'],
			'idProduit' => $_POST['itemIdModif'],
			));
			$req->closeCursor();
			echo "modif effectuee!";

			}
		else
		{
		echo " ";
		}
		}
		else {echo '';}
		?>
		</fieldset>
		<legend> outil de modification des descriptions produits </legend>
		<form method="post" action="formulaire_admin.php">
		
		<input type="HIDDEN" name="nom" value="Christian">
		<input type="HIDDEN" name="pass" value="BB887YV">
		
		       <label for="extract_nom"> Choix ?      </label>
		<select name="extract_nom" id="extract_nom">
			<option value="FR">FR</option>
			<option value="UK">UK</option>
		</select>
		<br/><br/>
		<input type="submit" value="Valider">  
		<br/><br/>

		<?php 

                if(isset($_POST['extract_nom']))
                {
			if($_POST['extract_nom'] == 'FR')
			{
		include("modif_nom.php");
			}
			else if($_POST['extract_nom'] == 'UK')
			{
		include("modif_nom_uk.php");
			}
			else
			{
		echo ''; 
			}
                }
                else
                {echo '';}
		
		
				if(isset($_POST['extract_id']) AND $_POST['langue']==='FR')
				{
						
						$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
						$req = $bdd->prepare('SELECT id,titre,description FROM dardel WHERE langue= \'fr\' AND id = :identifiant');
						$req->execute(array('identifiant' => $_POST['extract_id']));
						$donnees = $req->fetch();
						?>
						<form method="post" action="modif_confirm_fr.php">
						<input type="HIDDEN" name="id_produit" value="<?php echo $donnees['id'];?>">
						<textarea name="modif_titre" rows="3" cols="30"> <?php echo $donnees['titre'];?> </textarea>
						<br/><br/>
						<textarea name="modif_desc" rows="10" cols="50"> <?php echo $donnees['description'];?> </textarea>
						<br/><br/>
						<input type="submit" value="Modifier"> 
						</form>
						
						<?php
						$req->closeCursor();
				}
				elseif(isset($_POST['extract_id']) AND $_POST['langue']=='UK')
				{
						
						$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
						$req = $bdd->prepare('SELECT id,titre,description FROM dardel WHERE langue= \'uk\' AND id = :identifiant');
						$req->execute(array('identifiant' => $_POST['extract_id']));
						$donnees = $req->fetch();
						?>
						<form method="post" action="modif_confirm_uk.php">
						<input type="HIDDEN" name="id_produit" value="<?php echo $donnees['id'];?>">
						<textarea name="modif_titre" rows="3" cols="30"> <?php echo $donnees['titre'];?> </textarea>
						<br/><br/>
						<textarea name="modif_desc" rows="10" cols="50"> <?php echo $donnees['description'];?> </textarea>
						<br/><br/>
						<input type="submit" value="Modifier"> 
						</form>
						
						<?php
						$req->closeCursor();
				}
				else
				{
				echo '';
				}
				
		
		
		
		?>
		</fieldset>
		</form>


		</div>
			<?php	
			}
			else
			{
				echo "le nom ou le mot de passe est incorrect !";
			}
		}
		else
		{
			echo " vous n'avez pas saisi tous les champs";
		}

	?>
	</body>
	
	</html>