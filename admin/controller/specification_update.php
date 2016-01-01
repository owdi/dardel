<?php
/****************************************************
 * Specification update Form part
 *****************************************************/
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/loader.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/session.inc.php';

$template = $GLOBALS['twig']->loadTemplate('admin/specification_update.html.twig');

$param              = array();
$error              = false;
$active             = false;
$specification_list = false;
$message            = false;
$language_category  = false;
$active             = false;
$category_list      = false;

if (isset($_POST['languageCategoryForUpdate'])) {

    $_SESSION['language'] = $_POST['languageCategoryForUpdate'];
    header('location: ' . 'specification_update.php?language=' . $_POST['languageCategoryForUpdate'], true, 303);
}

if (isset($_GET['language']) && !empty($_GET['language'])) {

    $language_category = $_GET['language'];
    $active            = true;

    //get all category list
    $category_list = get_all_category($language_category);
}

if (isset($_POST['chooseSpecificationForUpdate'])) {

    $category_id = $_POST['category'];
    $active      = true;

    header('location: ' . 'specification_update.php?language=' . $_SESSION['language'] . '&category_id=' . $category_id, true, 303);
}

if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {

    $_SESSION['category_id'] = $_GET['category_id'];

    $active             = true;
    $specification_list = get_all_specification_by_category($_GET['category_id']);

} else {

    $_GET['category_id'] = false;
}

// update the list
if (isset($_POST['updateSpecification'])) {

    foreach ($_POST['specification_id'] as $key => $value) {

        $param['specification_id'] = (int) $value;
        $param['code']             = $_POST['code_' . $key];
        $param['description']      = $_POST['designation_' . $key];
        $param['height']           = $_POST['height_' . $key];
        $param['width']            = $_POST['width_' . $key];

        if (!is_integer($param['height'])) {
            $error    = true;
            $$message = 'une erreur s\'est produite !';
        }

        //treatment for update
        //$response = update_specification_by_categorie($param);

    }

    var_dump($response);
    if ($response == true) {

        $error   = false;
        $message = 'les specifications ont été mis à jour';
    } else {
        $error    = true;
        $$message = 'une erreur s\'est produite !';
    }

    //header('location: ' . 'specification_update.php?language=' . $_SESSION['language'] . '&category_id=' . $_SESSION['category_id'], true, 303);
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
    'category_on'                       => (isset($_SESSION['category_id'])) ? $_SESSION['category_id'] : false,
    'language_on'                       => (isset($_SESSION['language'])) ? $_SESSION['language'] : false,
));
