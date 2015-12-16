<?php
/****************************************************
* Category Form part
*****************************************************/
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/config/loader.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/session.inc.php');

$template = $GLOBALS['twig']->loadTemplate('category.html.twig');

$param = array();
if (isset($_POST['addCategory'])) {

    $param['category_title']    = $_POST['category_title'];
    $param['language']          = $_POST['language'];

    if (!empty($param['category_title']) ) {
        $create_category = set_category($param);       

        if ($create_category  == true) {        
            echo 'la catégorie a été ajouté';
        }else{
            echo 'une erreur s\'est produite';
        }
    }
}

//get category list
$category_list = get_all_category(1);


//display twig template with arguments
echo $template->render(array('menu'          => 'category',
                             'user_list'     => $user_list,
                             'message'       => $message, 
                             'error'         => $error,
                             'user'          => $user,
                             'session'       => $_SESSION,
                            ));