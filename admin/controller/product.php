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
$category_list      = false;

if (isset($_POST['language_product'])) {

    $_SESSION['language_product'] = $_POST['language_product'];
    header('location: ' . 'product.php?language=' . $_POST['language_product'], true, 303);
}

if (isset($_GET['language']) && !empty($_GET['language'])) {

    $language_category = $_GET['language'];
    $active            = true;

    //get all category list
    $category_list = get_all_category($language_category);
}

echo $template->render(array('menu' => 'product',
    'message'                           => $message,
    'error'                             => $error,
    'user'                              => $user,
    'session'                           => $_SESSION, //define in session.inc
    'language'                          => $language, //define in loader.inc
    'category_list'                     => $category_list,
    'active'                            => $active,
    'language_product'                  => (isset($_SESSION['language_product'])) ? $_SESSION['language_product'] : false,
));
