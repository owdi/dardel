<?php 

//local
define('server','mysql:host=127.0.0.1;dbname=dardelbdd');
define('user','root');
define('password','210485x');

// Connexion à la base de données
try {
    $GLOBALS['bdd'] = new PDO(server, user, password);
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}