<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/vendor/Twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader             = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/views');
$GLOBALS['twig']    = new Twig_Environment( $loader, array(
                                            'cache' => false,
                                            ));