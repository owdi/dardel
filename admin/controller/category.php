<?php
/****************************************************
* Category Form part
*****************************************************/
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/config/loader.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/session.inc.php');


$template   = $GLOBALS['twig']->loadTemplate('admin/category.html.twig');
$param      = array();
$error      = false;
$message    = false;

if (isset($_POST['addCategory'])) {

    $param['category_title']    = $_POST['category_title'];
    $param['language']          = $_POST['language'];

    if (!empty($param['category_title'])) {

        $check_category = get_category($param);

        if ($check_category  == true) {

            $error      = true;
            $message    = 'La catégorie "'.$param['category_title'].'" pour cette langue existe déjà !';

        }else {

            $create_category = set_category($param);

            if ($create_category  == true) {

                $error      = false;
                $message    = 'La catégorie "'.$param['category_title'].'" a été ajouté.';

            } else {

                $error      = true;            
                $message    = 'une erreur s\'est produite !';
            }
        }        
    } else {

        $error      = true;
        $message    = 'Veuillez renseigner tout les champs obligatoires !';
    }
}

//get category list
    $category_list = get_all_category_without_language();


//display twig template with arguments
echo $template->render(array('menu'          => 'category',
                             'category_list' => $category_list,
                             'message'       => $message, 
                             'error'         => $error,
                             'user'          => $user,
                             'session'       => $_SESSION, //define in session.inc
                             'language'      => $language, //define in loader.inc
                            ));

