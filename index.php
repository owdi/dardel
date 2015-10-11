<?php
    /* TWIG */
    include_once('./vendor/Twig/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
    
    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
      'cache' => false
    ));

    $template = $twig->loadTemplate('index.html.twig');
    


require_once("config/database.inc.php");
$bdd = new PDO(server,user,password);
$bdd->exec('SET NAMES utf8');
$req = $bdd->prepare('SELECT id,langue,nom,matiere,titre,description,image1_small,image2_small,image3_small FROM dardel WHERE langue= :language AND id=101 OR  langue= :language AND id=30 OR langue= :language AND id=61');
$req->execute(array('language' => 'fr'));

$products = $req->fetchAll();



//$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
//$bdd->exec('SET NAMES utf8');
$reqmenu1 = $bdd->prepare('SELECT Rubriques, sample1, lienrubrique FROM menu WHERE langue= :language');
$reqmenu1->execute(array('language' => 'fr'));

$menu = $reqmenu1->fetchAll();


//$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
//$bdd->exec('SET NAMES utf8');
$reqmenu2 = $bdd->query('SELECT * FROM menu WHERE langue="fr"');


$menu2 = $reqmenu2->fetchAll();

//var_dump($products);
echo $template->render(array(
    'products' => $products,
    'menu' => $menu,
    'menu2' => $menu2,
    ));