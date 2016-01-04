<?php
/****************************************************
 * Specification Form part
 *****************************************************/
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/loader.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/session.inc.php';

$template = $GLOBALS['twig']->loadTemplate('specification.html.twig');

$param               = array();
$error               = false;
$active              = false;
$specification_list  = false;
$message             = false;
$_GET['category_id'] = false;
$language_category   = false;
$active              = false;
$category_list       = false;

if (isset($_POST['addSpecification'])) {

    $param['category_id'] = $_POST['category'];
    $param['code']        = $_POST['code'];
    $param['description'] = $_POST['designation'];
    $param['height']      = $_POST['height'];
    $param['width']       = $_POST['width'];

    if (!empty($param['category_id']) && !empty($param['code']) && !empty($param['description']) && !empty($param['height']) && !empty($param['width'])) {

        $create_specification = set_specification($param);

        if ($create_specification == true) {

            $error   = false;
            $message = 'La spécification "' . $param['code'] . '" a été ajouté.';

        } else {

            $error   = true;
            $message = 'une erreur s\'est produite !';
        }

    } else {

        $error   = true;
        $message = 'Veuillez renseigner tout les champs obligatoires !';
    }
}

if (isset($_POST['chooseSpecification'])) {

    $category_id = $_POST['category'];
    $active      = true;

    header('location: ' . 'specification.php?category_id=' . $category_id, true, 303);
}

if (isset($_POST['updateSpecification'])) {

    foreach ($_POST['specification_id'] as $key => $value) {

        $param['specification_id'] = (int) $value;
        $param['code']             = $_POST['code_' . $key];
        $param['description']      = $_POST['designation_' . $key];
        $param['height']           = $_POST['height_' . $key];
        $param['width']            = $_POST['width_' . $key];

        //treatment for update
        $response = update_specification_by_categorie($param);
    }
    if ($response == true) {
        echo 'les specifications ont été mis à jour';
    } else {
        echo 'une erreur s\'est produite';
    }
}

if (isset($_POST['language_category'])) {

    header('location: ' . 'specification.php?language=' . $_POST['language_category'], true, 303);
}

if (isset($_GET['language']) && !empty($_GET['language'])) {

    $language_category = $_GET['language'];
    $active            = true;

    //get all category list
    $category_list = get_all_category($language_category);
}

$language_category = (isset($_GET['language'])) ? $_GET['language'] : false;

//display twig template with arguments
echo $template->render(array('menu' => 'specification',
    'category_list'                     => $category_list,
    'message'                           => $message,
    'error'                             => $error,
    'user'                              => $user,
    'session'                           => $_SESSION,
    'specification_list'                => $specification_list,
    'active'                            => $active,
    'category_id'                       => $_GET['category_id'],
    'language'                          => $language, //define in loader.inc,
    'language_category'                 => $language_category,
));
