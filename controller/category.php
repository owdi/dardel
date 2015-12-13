<?php


/****************************************************
* Category Form part
*****************************************************/
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