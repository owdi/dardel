<?php

session_start();

//require config
require_once($_SERVER['DOCUMENT_ROOT'].'/config/database.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/twig.inc.php');

$template   = $GLOBALS['twig']->loadTemplate('admin.html.twig');
$user       = $_SESSION['user'];

//test session active
if (empty($_SESSION) ){
    header('location: ' . '/index.php', true, 303);
}

if (isset($_POST['logout'])) {
    destroy_session();
}

function destroy_session() {
    session_destroy();
    unset ($_SESSION['id']);
    header('location: ' . '/index.php', true, 303);
}




echo $template->render(array('user' => $user ));