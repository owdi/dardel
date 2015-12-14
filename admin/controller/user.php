<?php

/****************************************************
* User Form part
*****************************************************/
$param = array();
if (isset($_POST['add'])) {

    $param['login']      = $_POST['login'];
    $param['password']   = $_POST['password'];
    $param['email']      = $_POST['email'];

    if (!empty($param['login']) && !empty($param['password']) ) {
        $create_user = set_user($param);       

        if ($create_user == true) {        
            echo 'le user a été ajouté';
        }else{
            echo 'une erreur s\'est produite';
        }
    }
}

//get user list
$user_list = get_all_user();