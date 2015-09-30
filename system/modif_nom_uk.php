		<?php
		
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
			$req = $bdd->query('SELECT nom,description,id,langue FROM dardel WHERE langue= \'uk\'');

			?>

			
		<form method="POST" action="formulaire_admin.php">
		
		<input type="HIDDEN" name="nom" value="Christian">
		<input type="HIDDEN" name="pass" value="BB887YV">
		<input type="HIDDEN" name="langue" value="UK">
		
		       <label for="choix"> Choix ?      </label>
		<select name="extract_id" id="extraire">
		<option value="">Faites votre choix :</option> 
				<?php while ($donnees = $req->fetch())
				{ ?>
			<option value="<?php echo $donnees['id']; ?>"><?php echo $donnees['nom']; ?></option>
			<br/>
				<?php 
				}
				?>
				
		</select>
		<br/><br/>
		<input type="submit" value="Valider"> 
		</form>
		
		<?php
					$req->closeCursor();
		?>