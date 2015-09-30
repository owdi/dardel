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
	<?php
	if ($_POST["recaptcha_challenge_field"] != '') {

	require_once('../system/recaptchalib.php');
	$privatekey = "6Lcp-fcSAAAAAGb1shOQcWEXM1oYm6TU8_iIlh--";
	$resp = recaptcha_check_answer ($privatekey,
	$_SERVER["REMOTE_ADDR"],
	$_POST["recaptcha_challenge_field"],
	$_POST["recaptcha_response_field"]);

	if (!$resp->is_valid) {
	// What happens when the CAPTCHA was entered incorrectly
	// die ("Le code captcha est incorrect, veulliez recommencer.");
	?>
	<div class="reponse_formulaire"><h2>Le code saisi pour le captcha est incorrect<br/><br/>Merci de recommencer<br/><br/><br/>
	<a href="index.php">Revenir à l'accueil</a> </h2></div>
	<?php
	} else {    // Your code here to handle a successful verification

	if(isset($_POST['societe'])) { echo '';} else { $_POST['societe'] = 'indefini';}
	if(isset($_POST['activite'])) { echo '';} else { $_POST['activite'] = 'indefini';}
	if(isset($_POST['adresse'])) { echo '';} else { $_POST['adresse'] = 'indefini';}
	if(isset($_POST['ville'])) { echo '';} else { $_POST['ville'] = 'indefini';}
	if(isset($_POST['zip'])) { echo '';} else { $_POST['zip'] = 'indefini';}
	if(isset($_POST['tel'])) { echo '';} else { $_POST['tel'] = 'indefini';}
	if(isset($_POST['pays'])) { echo '';} else { $_POST['pays'] = 'indefini';}
	if(isset($_POST['siret'])) { echo '';} else { $_POST['siret'] = 'indefini';}
	if(isset($_POST['r_achat'])) { echo '';} else { $_POST['r_achat'] = 'indefini';}
	if(isset($_POST['email'])) { echo '';} else { $_POST['email'] = 'indefini';}
	if(isset($_POST['reponse'])) { echo '';} else { $_POST['reponse'] = 'indefini';}
	if(isset($_POST['precisions'])) { echo '';} else { $_POST['precisions'] = 'indefini';}

	$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
	$req = $bdd->prepare('INSERT INTO porte_feuille(societe,activite,adresse,ville,zip,tel,pays,siret,r_achat,email,reponse,precisions) VALUES(:societe, :activite, :adresse, :ville, :zip, :tel, :pays, :siret, :r_achat, :email, :reponse, :precisions)');
	$req->execute(array(
	'societe' => $_POST['societe'],
	'activite' => $_POST['activite'],
	'adresse' => $_POST['adresse'],
	'ville' => $_POST['ville'],
	'zip' => $_POST['zip'],
	'tel' => $_POST['tel'],
	'pays' => $_POST['pays'],
	'siret' => $_POST['siret'],
	'r_achat' => $_POST['r_achat'],
	'email' => $_POST['email'],
	'reponse' => $_POST['reponse'],
	'precisions' => $_POST['precisions'],
	));

	$headers ='From: "Dardel"<adresse@fai.fr>'."\n"; 
	$destinataire='password@dardel.com';
	$email_expediteur='Dardel';
	$email_reply='email_de_reponse@fai.fr';
	$societe = $_POST['societe'];
	$activite = $_POST['activite'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$zip = $_POST['zip'];
	$tel = $_POST['tel'];
	$pays = $_POST['pays'];
	$siret = $_POST['siret'];
	$r_achat = $_POST['r_achat'];
	$email = $_POST['email'];
	$reponse = $_POST['reponse'];
	$precisions = $_POST['precisions'];
	$frontiere ='';


	$message_texte='Informations :'."\n\n".'Societe : '.$societe ."\n\n".'Activité : '.$activite."\n\n".'Adresse : '.$adresse."\n\n".'Ville : '.$ville."\n\n".'Code postal : '.$zip."\n\n".'Tel : '.$tel."\n\n".'Pays : '.$pays."\n\n".'Siret : '.$siret."\n\n".'Responsable achats : '.$r_achat."\n\n".'E-mail : '.$email."\n\n".'Souhaitez vous recevoir les nouveautés Dardel ? : '.$reponse."\n\n".'Precisions : '.$precisions; 

	$message = 'Demande d\'identifiant Dardel'."\n\n";

	$message .= '--'.$frontiere.'--'."\n";

	$message .= $message_texte."\n\n"; 

	if(mail('password@dardel.com,marc.crucifix@gmail.com,nathalie.herve@dardel.com', 'Dardel', $message, $headers))
	{
	if ($_SESSION['langue'] == "fr") {
	?>
	<div class="reponse_formulaire"><h2> Vos informations ont bien étés transmises!<br/><br/>Vous recevrez vos identifiants dans les meilleurs délais sur votre boîte mail<br/><br/><br/>
	<a href="http://www.dardel.com/new/index.php">Revenir à l'accueil</a> </h2></div><?php echo '.';

	}elseif ($_SESSION['langue'] == "uk") {
	?>
	<div class="reponse_formulaire"><h2> Your information has been saved! <br/><br/> You will receive your credentials as soon as possible to your mailbox<br/><br/><br/>
	<a href="http://www.dardel.com/new/index.php">Revenir à l'accueil</a> </h2></div><?php echo '.';
	}
	}
	else
	{
	echo 'Le message n\'a pu être envoyé';
	}

	}
	}else{
	if ($_SESSION['langue'] == "fr") {
	?> 
	<form  id="formulaire_inscription" class="form-horizontal" action="http://www.dardel.com/new/rubriques/formulaire.php" method="post">
	<fieldset>

	<legend>Vos coordonnées</legend>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="societe"> Votre Société* : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="societe" type="text" name="societe" placeholder="Societe" value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="activite"> Votre Activité* : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="activite" type="text" name="activite" placeholder="Activite"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="numero" > Adresse : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="numero" type="text" name="adresse" placeholder="adresse"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="ville" > Ville*: </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="ville" type="text" name="ville" placeholder="Ville" value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="zip" > Code postal: </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="zip" type="text" name="zip"  placeholder="Code postal" value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="pays">Choix pays:</label>
		<div class="col-sm-8">
			<select name="pays" class="form-control" id="pays">
				<option value="france">France</option>
				<option value="espagne">Espagne</option>
				<option value="portugal">Espagne</option>
				<option value="italie">Italie</option>
				<option value="royaume-uni">Royaume-Uni</option>
				<option value="canada">Canada</option>
				<option value="etats-unis">Etats-Unis</option>
				<option value="chine">Chine</option>
				<option value="japon">Japon</option>
				<option value="Suisse">Suisse</option>
				<option value="Pays Bas">Pays Bas</option>
				<option value="Irlande">Irlande</option>
				<option value="Suède">Suède</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Belgique">Belgique</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="ren col-sm-2 control-label" for="r_achat"> Responsable Achats : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="r_achat" type="text" name="r_achat"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="siret"> N° SIRET : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="siret" type="text" name="siret"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="tva"> N° TVA pour le CEE : </label>
		<div class="col-sm-8">	
			<input class="input_formulaire form-control" id="tva" type="text" name="tva"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="tel"> N° Tel : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="tel" type="text" name="tel"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="email"> E-mail* : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="email" type="text" name="email"  value=""/>
		</div>
	</div>

	</fieldset> 

	<fieldset>

	<legend>Autres questions :</legend>
	<p>
		Souhaitez vous êtres informé des nouveautés Dardel ?<br />
		<div class="radio">
			<label>
				<input type="radio" name="reponse" value="Oui" id="oui" checked/>
				Oui
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="reponse" value="Non" id="non"  />
				Non
			</label>
		</div>
	</p>

	<p>
		<label for="precisions">Autres remarques :</label><br />
		<textarea name="precisions" id="precisions" class="form-control" cols="60" rows="20" placeholder="Texte libre"></textarea>
	</p>

	<p>Champs obligatoires * </p>

	</fieldset>

	<?php
	require_once('../system/recaptchalib.php');
	$publickey = "6Lcp-fcSAAAAAKTtJjDPLg4GkpnhKcknxXDcBU6_"; // you got this from the signup page
	echo recaptcha_get_html($publickey);
	?>
	<p>
	<button type="submit" class="btn btn-default">Valider</button><button type="reset" class="btn btn-default">Effacer</button>
	</p>
	</form>
	<?php }elseif ($_SESSION['langue'] == "uk") {
	?>
	<form  id="formulaire_inscription" class="form-horizontal" action="http://www.dardel.com/new/rubriques/formulaire.php" method="post">
	<fieldset>

	<legend>Contact informations</legend>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="societe"> Company* : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="societe" type="text" name="societe" placeholder="Name of your company" value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="activite"> Activity* : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="activite" type="text" name="activite" placeholder="Field of work"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="numero" > Adress : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="numero" type="text" name="adresse" placeholder="adress"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="ville" > Town*: </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="ville" type="text" name="ville" placeholder="Town" value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label" for="zip" > ZIP Code: </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="zip" type="text" name="zip"  placeholder="Zip code" value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="pays">Select country:</label>
		<div class="col-sm-8">
			<select name="pays" class="form-control" id="pays">
				<option value="france">France</option>
				<option value="espagne">Espagne</option>
				<option value="portugal">Espagne</option>
				<option value="italie">Italie</option>
				<option value="royaume-uni">Royaume-Uni</option>
				<option value="canada">Canada</option>
				<option value="etats-unis">Etats-Unis</option>
				<option value="chine">Chine</option>
				<option value="japon">Japon</option>
				<option value="Suisse">Suisse</option>
				<option value="Pays Bas">Pays Bas</option>
				<option value="Irlande">Irlande</option>
				<option value="Suède">Suède</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Belgique">Belgique</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="ren col-sm-2 control-label" for="r_achat"> Purchasing Manager : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="r_achat" type="text" name="r_achat"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="siret"> N° SIRET : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="siret" type="text" name="siret"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="tva"> TVA Numbers : </label>
		<div class="col-sm-8">	
			<input class="input_formulaire form-control" id="tva" type="text" name="tva"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="tel"> Phone : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="tel" type="text" name="tel"  value=""/>
		</div>
	</div>

	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="email"> E-mail* : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="email" type="text" name="email"  value=""/>
		</div>
	</div>

	</fieldset> 

	<fieldset>

	<legend> Questions :</legend>
	<p>
		Would you like to be informed about news Dardel?<br />
		<div class="radio">
			<label>
				<input type="radio" name="reponse" value="Oui" id="oui" checked/>
				Yes
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="reponse" value="Non" id="non"  />
				No
			</label>
		</div>
	</p>

	<p>
		<label for="precisions">Other comments:</label><br />
		<textarea name="precisions" id="precisions" class="form-control" cols="60" rows="20" placeholder="Texte area"></textarea>
	</p>

	<p>Mandatory fields * </p>

	</fieldset>
	<?php
	require_once('../system/recaptchalib.php');
	$publickey = "6Lcp-fcSAAAAAKTtJjDPLg4GkpnhKcknxXDcBU6_"; // you got this from the signup page
	echo recaptcha_get_html($publickey);
	?>
	<p>
	<button type="submit" class="btn btn-default">Confirm</button><button type="reset" class="btn btn-default">Cancel</button>
	</p>

	</form>
	<?php
		}
	}
	?>
	</div>
	</div>
	</div>
	<script src="http://www.dardel.com/new/js/formulaire.js"></script>
	<?php include("../system/footer.php"); ?>
	</body>
	</html>