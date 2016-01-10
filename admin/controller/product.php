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
    header('location: ' . 'product.php?language=' . $_SESSION['language_product'], true, 303);
}

/*
 * define language to load category *
 */
if (isset($_GET['language']) && !empty($_GET['language'])) {

    $language_category = $_GET['language'];
    $active            = true;

    //get all category list
    $category_list = get_all_category($language_category);
}

/*
 * Form
 * Add product in database
 */
if (isset($_POST['addProduct'])) {

    $param['title']       = $_POST['title'];
    $param['description'] = $_POST['description'];
    $param['language_id'] = $_SESSION['language_product'];
    $param['category_id'] = $_POST['category'];
    $param['picture_id']  = 0;
    $param['material_id'] = 0;
    $param['status']      = 1;

    if (empty($param['title'])) {
        $error   = true;
        $message = 'le titre ne peut pas être vide !';
    }
    if (empty($param['description'])) {
        $error   = true;
        $message = 'La description ne peut pas être vide';
    }
    if (empty($param['language_id'])) {
        $error   = true;
        $message = 'la langue ne peut pas être vide !';
    }
    if (empty($param['category_id'])) {
        $error   = true;
        $message = 'la catégorie ne peut pas être vide !';
    }

    if ($error == false) {
        //treatment for insert
        $response = setProduct($param);

    } else {

        $response = false;
    }

    if ($response == true) {

        $error   = false;
        $message = 'le produit a été ajouté';

    } else {

        $error    = true;
        $$message = 'une erreur s\'est produite !';
    }
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
