<?php
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
			$bdd->exec('SET NAMES utf8');
			$req = $bdd->query('SELECT client,mdp FROM administration');
			
							while ($donnees = $req->fetch())
				{
				
				?> <p style="font-size:15px; font-family:calibri;"><strong> Utilisateur : </strong><?php echo $donnees['client'];?>  <?php echo "          ";?> <br/><strong>   Mot de passe : </strong><?php echo $donnees['mdp'];?> </p>
				<br/>
				<?php
				
				}
			
			
			
			$req->closeCursor();
			?>