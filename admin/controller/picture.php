<?php

/****************************************************
 * Picture Form part
 *****************************************************/
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/loader.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/session.inc.php';

$template = $GLOBALS['twig']->loadTemplate('admin/picture.html.twig');

$error              = false;
$active             = false;
$specification_list = false;
$message            = false;
$category_list      = false;

if (isset($_POST['language_picture'])) {

    $_SESSION['language_picture'] = $_POST['language_picture'];
    header('location: ' . 'picture.php?language=' . $_POST['language_picture'], true, 303);
}

if (isset($_GET['language']) && !empty($_GET['language'])) {

    $language_category = $_GET['language'];
    $active            = true;

    //get all category list
    $category_list = get_all_category($language_category);
}

if (isset($_POST['chooseProduct'])) {

    $category_id = $_POST['category'];
    $active      = true;

    header('location: ' . 'picture.php?language=' . $_SESSION['language'] . '&category_id=' . $category_id, true, 303);
}

if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {

    $_SESSION['category_id_for_product'] = $_GET['category_id'];

    $active       = true;
    $product_List = getProduct($_GET['category_id']);

} else {

    $_GET['category_id_for_product'] = false;
}

echo $template->render(array('menu' => 'picture',
    'message'                           => $message,
    'error'                             => $error,
    'user'                              => $user,
    'session'                           => $_SESSION, //define in session.inc
    'language'                          => $language, //define in loader.inc
    'category_list'                     => $category_list,
    'active'                            => $active,
    'language_picture'                  => (isset($_SESSION['language_picture'])) ? $_SESSION['language_picture'] : false,
));
