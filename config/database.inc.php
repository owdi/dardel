<?php 

//local
define('SERVER','mysql:host=127.0.0.1;dbname=dardelbdd');
define('USER','root');
define('PASSWORD','210485x');

// Connexion à la base de données
try {
    $GLOBALS['bdd'] = new PDO(SERVER, USER, PASSWORD);
    $GLOBALS['bdd']->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    //$GLOBALS['bdd']->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}