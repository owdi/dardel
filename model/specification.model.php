<?php
function get_all_specification_by_category($categroy_id){            
    $request = $GLOBALS['bdd']->prepare('SELECT 
                                            *
                                        FROM specification 
                                        WHERE category_id = :category_id
                                        ');
    $request->execute(array('category_id' => $categroy_id));
    $specification = $request->fetchAll();
    $request->closeCursor();
    return $specification;
}

function set_specification($param) {
    $request = $GLOBALS['bdd']->prepare('INSERT INTO specification (category_id, code, description, width, height, status, created_date)
                                         VALUES (                                            
                                            :category_id,
                                            :code,
                                            :description,
                                            :width,
                                            :height,
                                            :status,
                                            :created_date
                                            )'
                                        );
    $create_category = $request->execute(array('category_id'    => $param['category_id'],
                                                'code'          => $param['code'],
                                                'description'   => $param['description'],
                                                'width'         => $param['width'],
                                                'height'        => $param['height'],
                                                'status'        => 1, 
                                                'created_date'  => time(),
                                             ));    
    //var_dump($GLOBALS['bdd']->errorInfo()); 
    $request->closeCursor();
    return $create_category;
}



