<?php

session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/config/loader.inc.php');

/****************************************************
* Specification Form part
*****************************************************/
$param = array();
if (isset($_POST['addSpecification'])) {

    $param['category_id']   = $_POST['category'];
    $param['code']          = $_POST['code'];
    $param['description']   = $_POST['designation'];
    $param['height']        = $_POST['height'];
    $param['width']         = $_POST['width'];

var_dump($param);


    if (!empty($param['category_id']) && !empty($param['code']) && !empty($param['description']) && !empty($param['height']) && !empty($param['width']) ) {
        $create_specification = set_specification($param);       

        if ($create_specification  == true) {        
            echo 'la specification a été ajouté';
        }else{
            echo 'une erreur s\'est produite';
        }
    }
}

if (isset($_POST['chooseSpecification'])) {
    $category_id = $_POST['category'];
    $specification_list = get_all_specification_by_category($category_id);
}

if (isset($_POST['updateSpecification'])) {

    foreach ($_POST['specification_id'] as $key => $value) {

        $param['specification_id']    = (int) $value;
        $param['code']                = $_POST['code_'.$key];
        $param['description']         = $_POST['designation_'.$key];
        $param['height']              = $_POST['height_'.$key];
        $param['width']               = $_POST['width_'.$key];

        //treatment for update
        $response = update_specification_by_categorie($param);        
    }
    if($response == true){
            echo 'les specifications ont été mis à jour';
    }else{
        echo 'une erreur s\'est produite';
    }
}


$template   = $GLOBALS['twig']->loadTemplate('specification.html.twig');
//display twig template with arguments
echo $template->render(array('user'             => $user,
                             'user_list'        => $user_list,
                             'category_list'    => $category_list,
                             'language'         => $language,
                             'specification_list'    => $specification_list,
                            ));