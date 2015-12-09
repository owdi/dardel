<?php

session_start();

//require config
require_once($_SERVER['DOCUMENT_ROOT'].'/config/database.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/twig.inc.php');

$template   = $GLOBALS['twig']->loadTemplate('admin.html.twig');
$user       = $_SESSION['user'];

var_dump(session_status());

if (isset($_POST['logout'])) {
    destroy_session();
}

function destroy_session() {
    session_destroy();
    header('location: ' . '/index.php', true, 303);
}




echo $template->render(array('user' => $user ));