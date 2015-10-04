<?php
    include_once('../vendor/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
    
    $loader = new Twig_Loader_Filesystem('templates'); // Dossier contenant les templates
    $twig = new Twig_Environment($loader, array(
      'cache' => false
    ));

    $template = $twig->loadTemplate('model1.html');
    echo $template->render(array(
	'moteur_name' => 'Twig'
    )); 
?>