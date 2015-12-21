<?php

session_start();

//require config
require_once($_SERVER['DOCUMENT_ROOT'].'/config/database.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/twig.inc.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/model/user.model.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/model/category.model.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/model/specification.model.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/model/language.model.php');


$template   = $GLOBALS['twig']->loadTemplate('admin_homepage.html.twig');
$user       = $_SESSION['user'];

//button logout 
if (isset($_POST['logout'])) {    
    destroy_session();    
}

function destroy_session() 
{
    session_destroy();
    unset ($_SESSION['id']);
    header('location: ' . '/index.php', true, 303);
}

//display twig template with arguments
echo $template->render(array('user'                 => $user,
                             'user_list'            => $user_list,
                             'category_list'        => $category_list,
                             'language'             => $language,
                             'specification_list'   => $specification_list,
                             'session'              => $_SESSION, //define in session.inc
                            ));