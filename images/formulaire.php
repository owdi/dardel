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
	<a href="index.php">Revenir à l'accueil</a> </h2></div><?php echo '.';

	}elseif ($_SESSION['langue'] == "uk") {
	?>
	<div class="reponse_formulaire"><h2> Your information has been saved! <br/><br/> You will receive your credentials as soon as possible to your mailbox<br/><br/><br/>
	<a href="index.php">Revenir à l'accueil</a> </h2></div><?php echo '.';
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
<!--     <span id="comment" class="class1"></span>
	<span id="coche1" class="class2">&nbsp;</span> -->


	<br/>
	<div class="form-group">
		<label class="re col-sm-2 control-label"  for="activite"> Votre Activité* : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="activite" type="text" name="activite" placeholder="Activite"  value=""/>
		</div>
	</div>
<!--     <span id="comment2" class="class1"></span>
	<span id="coche2" class="class2">&nbsp;</span> -->



	<br/>
	<div class="form-group">
		<label class="re col-sm-2 control-label" for="numero" > Adresse : </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="numero" type="text" name="num_rue"  value="" maxlength="8"/>
		</div>
	</div>
<!--     <span id="comment5" class="class1"> Seuls les chiffres sont autorisés </span>
	<span id="coche5" class="class2">&nbsp;</span> -->
<!-- 

	<br/>
	<select id="type_de_rue" class="form-control" name="type_rue">
	<option>Rue</option>
	<option>Ruelle</option>
	<option>Route</option>
	<option>Avenue</option>
	<option>Boulevard</option> 
	<option>Voie</option>
	<option>Impasse</option>
	</select -->

<!--	<input  class="input_formulaire" type="text" id="rue" name="adresse" placeholder="adresse"/>
     <span id="comment6" class="class1"> 2 lettres minimum </span>
	<span id="coche6" class="class2">&nbsp;</span> -->

	<br/>
	<div class="form-group">
		<label class="re col-sm-2 control-label" for="ville" > Ville*: </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="ville" type="text" name="ville" placeholder="Ville" value=""/>
		</div>
	</div>
<!--     <span id="comment7" class="class1"> 2 lettres minimum </span>
	<span id="coche7" class="class2">&nbsp;</span> -->

	<br/>
	<div class="form-group">
		<label class="re col-sm-2 control-label" for="zip" > Code postal: </label>
		<div class="col-sm-8">
			<input class="input_formulaire form-control" id="zip" type="text" name="zip"  placeholder="Code postal" value=""/>
		</div>
	</div>
<!--    <span id="comment8" class="class1"> Code postal = 5 chiffres</span>
	<span id="coche8" class="class2">&nbsp;</span> -->

	<br/>
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

	<br/>
	<label class="re" for="r_achat"> Responsable Achats : </label>
	<input class="input_formulaire" id="r_achat" type="text" name="r_achat"  value=""/>
	<span id="comment9" class="class1"> 2 lettres minimum</span>
	<span id="coche9" class="class2">&nbsp;</span>

	<br/>
	<label class="re"  for="siret"> N° SIRET : </label>
	<input class="input_formulaire" id="siret" type="text" name="siret"  value=""/>
	<span id="comment10" class="class1"> 14 chiffres exemple: 404 833 048 00022</span>
	<span id="coche10" class="class2">&nbsp;</span>

	<br/>
	<label class="re"  for="tva"> N° TVA pour le CEE : </label>
	<input class="input_formulaire" id="tva" type="text" name="tva"  value=""/>
	<span id="comment11" class="class1"> Code pays + 11 chiffres </span>
	<span id="coche11" class="class2">&nbsp;</span>


	<br/>
	<label class="re"  for="tel"> N° Tel : </label>
	<input class="input_formulaire" id="tel" type="text" name="tel"  value=""/>
	<span id="comment3" class="class1"> 10 Chiffres minimum </span>
	<span id="coche3" class="class2">&nbsp;</span>

	<br/>
	<label class="re"  for="email"> E-mail* : </label>
	<input class="input_formulaire" id="email" type="text" name="email"  value=""/>
	<span id="comment4" class="class1"> Ceci n'est pas une adresse e-mail valide </span>
	<span id="coche4" class="class2">&nbsp;</span>
	</fieldset> 


	<fieldset>
	<legend>Autres questions :</legend>
	<p>
	Souhaitez vous êtres informé des nouveautés Dardel ?<br />
	<input type="radio" name="reponse" value="Oui" id="oui"  /> <label for="oui">Oui</label><br />
	<input type="radio" name="reponse" value="Non" id="non"  /> <label for="non">Non</label><br />
	</p>

	<p>
	<label for="precisions">Autres remarques :</label><br />
	<textarea name="precisions" id="precisions" cols="60" rows="20" ></textarea>
	</p>

	<p>Champs obligatoires * </p>

	</fieldset>


	<?php
	require_once('../system/recaptchalib.php');
	$publickey = "6Lcp-fcSAAAAAKTtJjDPLg4GkpnhKcknxXDcBU6_"; // you got this from the signup page
	echo recaptcha_get_html($publickey);
	?>
	<p>
	<input type="submit" /> <input type="reset" />
	</p>
	</form>
	<?php }elseif ($_SESSION['langue'] == "uk") {
	?>
	<form  id="formulaire_inscription" action="mail.php" method="post">
	<fieldset>
	<legend>Contact informations</legend>


	<label class="re" for="societe"> Company* : </label>
	<input class="input_formulaire" id="societe" type="text" name="societe"  value=""/>
	<span id="comment" class="class1"></span>
	<span id="coche1" class="class2">&nbsp;</span>


	<br/>
	<label class="re"  for="activite"> Activity* : </label>
	<input class="input_formulaire" id="activite" type="text" name="activite"  value=""/>
	<span id="comment2" class="class1"></span>
	<span id="coche2" class="class2">&nbsp;</span>



	<br/>
	<div class="re"  > Adress : </div>
	<br/>
	<label class="re" for="numero" > N°: </label>
	<input class="input_formulaire" id="numero" type="text" name="num_rue"  value="" maxlength="8"/>
	<span id="comment5" class="class1"> Only digit are authorized </span>
	<span id="coche5" class="class2">&nbsp;</span>


	<br/>
	<select id="type_de_rue" name="type_rue">
	<option>Street</option>
	<option>Road</option>
	</select>

	<input  class="input_formulaire" type="text" id="rue" name="adresse"/>
	<span id="comment6" class="class1">minimum 2 letters </span>
	<span id="coche6" class="class2">&nbsp;</span>

	<br/>
	<label class="re" for="ville" > Town*: </label>
	<input class="input_formulaire" id="ville" type="text" name="ville"  value=""/>
	<span id="comment7" class="class1"> minimum 2 letters </span>
	<span id="coche7" class="class2">&nbsp;</span>

	<br/>
	<label class="re" for="zip" > ZIP Code: </label>
	<input class="input_formulaire" id="zip" type="text" name="zip"  value=""/>
	<span id="comment8" class="class1"> ZIP Code = 5 digits</span>
	<span id="coche8" class="class2">&nbsp;</span>

	<br/>
	<select name="pays" id="pays">
	<option value="france">France</option>
	<option value="espagne">Spain</option>
	<option value="portugal">Portugal</option>
	<option value="italie">Italy</option>
	<option value="royaume-uni">UK</option>
	<option value="canada">Canada</option>
	<option value="etats-unis">USA</option>
	<option value="chine">China</option>
	<option value="japon">Japan</option>
	<option value="Suisse">Switzerland</option>
	<option value="Pays Bas">netherlands</option>
	<option value="Irlande">Ireland</option>
	<option value="Suède">Swede</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Belgique">Belgium</option>
	</select>

	<br/>
	<label class="re" for="r_achat"> Purchasing Manager : </label>
	<input class="input_formulaire" id="r_achat" type="text" name="r_achat"  value=""/>
	<span id="comment9" class="class1"> minimum 2 letters </span>
	<span id="coche9" class="class2">&nbsp;</span>

	<br/>
	<label class="re"  for="siret"> N° SIRET : </label>
	<input class="input_formulaire" id="siret" type="text" name="siret"  value=""/>
	<span id="comment10" class="class1"> 14 digits example: 404 833 048 00022</span>
	<span id="coche10" class="class2">&nbsp;</span>

	<br/>
	<label class="re"  for="tva"> TVA Numbers : </label>
	<input class="input_formulaire" id="tva" type="text" name="tva"  value=""/>
	<span id="comment11" class="class1"> Country Code + 11 digits </span>
	<span id="coche11" class="class2">&nbsp;</span>


	<br/>
	<label class="re"  for="tel"> Phone : </label>
	<input class="input_formulaire" id="tel" type="text" name="tel"  value=""/>
	<span id="comment3" class="class1"> minimum 10 digits </span>
	<span id="coche3" class="class2">&nbsp;</span>

	<br/>
	<label class="re"  for="email"> E-mail* : </label>
	<input class="input_formulaire" id="email" type="text" name="email"  value=""/>
	<span id="comment4" class="class1"> Invalid mail </span>
	<span id="coche4" class="class2">&nbsp;</span>
	</fieldset> 


	<fieldset>
	<legend> Questions :</legend>
	<p>
	Would you like to be informed about news Dardel?<br />
	<input type="radio" name="reponse" value="Oui" id="oui"  /> <label for="oui">Oui</label><br />
	<input type="radio" name="reponse" value="Non" id="non"  /> <label for="non">Non</label><br />
	</p>

	<p>
	<label for="precisions">Other comments:</label><br />
	<textarea name="precisions" id="precisions" cols="60" rows="20" ></textarea>
	</p>

	<p>Mandatory fields * </p>

	</fieldset>

	<p>
	<input type="submit" /> <input type="reset" />
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