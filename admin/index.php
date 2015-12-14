<?php

//require config
require_once($_SERVER['DOCUMENT_ROOT'].'/config/database.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/twig.inc.php');
//model
require_once($_SERVER['DOCUMENT_ROOT'].'/model/user.model.php');
    
//define twig template
$template = $GLOBALS['twig']->loadTemplate('admin_connexion.html.twig');

if ( isset($_POST['login']) && isset($_POST['password']) ) {
    $login      = $_POST['login'];
    $password   = $_POST['password'];
    $user       = get_user_response($login, $password);
}

//return response for a user
function get_user_response($login ='', $password =''){    
    $user = get_user($login, $password);

    if ( is_array($user) && !empty($user) ) {
        session_start();
        $_SESSION['user']   = $user;        
        header('location: ' . './controller/admin.php', true, 303);
    }else{
        $user = '';
    }    
}

//display twig template with arguments
echo $template->render(array());