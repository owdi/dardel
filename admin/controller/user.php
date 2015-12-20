<?php
/****************************************************
* User Form part
*****************************************************/
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/config/loader.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/session.inc.php');

$template   = $GLOBALS['twig']->loadTemplate('user.html.twig');
$param      = array();
$error      = false;
$message    = false;

if (isset($_POST['addUser'])) {

    $param['login']      = $_POST['login'];
    $param['password']   = $_POST['password'];
    $param['email']      = $_POST['email'];

    if (!empty($param['login']) && !empty($param['password'])) {  

        $create_user = set_user($param);

        if ($create_user == true) {

            $error      = false;
            $message    = 'L\'utilisateur "'.$param['login'].'" a bien été ajouté.';

        } else {

            $error      = true;
            $message    = 'Un utilisateur du même nom doit déjà exister. Veuillez recommencer.';
        }
        
    } else {

        $error      = true;
        $message    = 'Veuillez renseigner tout les champs obligatoires !';
    }
}

//get user list
$user_list = get_all_user();

//display twig template with arguments
echo $template->render(array('menu'          => 'user',
                             'user_list'     => $user_list,
                             'message'       => $message, 
                             'error'         => $error,
                             'user'          => $user,
                             'session'       => $_SESSION,
                            ));