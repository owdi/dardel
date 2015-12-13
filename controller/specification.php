<?php

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


//get specification list
//$specification_list = get_all_specification();

