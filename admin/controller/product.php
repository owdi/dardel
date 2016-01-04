<?php

/****************************************************
 * Product Form part
 *****************************************************/
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/loader.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/session.inc.php';

$template = $GLOBALS['twig']->loadTemplate('admin/product.html.twig');

$error              = false;
$active             = false;
$specification_list = false;
$message            = false;

echo $template->render(array('menu' => 'product',
    'message'                           => $message,
    'error'                             => $error,
    'user'                              => $user,
    'session'                           => $_SESSION, //define in session.inc
    'language'                          => $language, //define in loader.inc
));
