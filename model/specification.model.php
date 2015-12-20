<?php
function get_all_specification_by_category($categroy_id)
{            
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

function set_specification($param) 
{
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

    $request->bindValue(':category_id', $param['category_id'], PDO::PARAM_INT);
    $request->bindValue(':code', $param['code'], PDO::PARAM_STR);
    $request->bindValue(':description', $param['description'], PDO::PARAM_STR);
    $request->bindValue(':height', $param['height'], PDO::PARAM_INT);
    $request->bindValue(':width', $param['width'], PDO::PARAM_INT);
    $request->bindValue(':status', 1, PDO::PARAM_INT);
    $request->bindValue(':created_date', 1, PDO::PARAM_INT);
    
    $create_category = $request->execute();
    $request->closeCursor();

    return $create_category;
}

function update_specification_by_categorie($param)
{

    $request = $GLOBALS['bdd']->prepare('UPDATE specification SET code          = :code,
                                                                  description   = :description,
                                                                  height        = :height, 
                                                                  width         = :width,
                                                                  updated_date  = :updated_date
                                                              WHERE specification_id = :specification_id'
                                        );

    $request->bindValue(':code', $param['code'], PDO::PARAM_STR);
    $request->bindValue(':description', $param['description'], PDO::PARAM_STR);
    $request->bindValue(':height', $param['height'], PDO::PARAM_INT);
    $request->bindValue(':width', $param['width'], PDO::PARAM_INT);
    $request->bindValue(':updated_date', time(), PDO::PARAM_INT);
    $request->bindValue(':specification_id', $param['specification_id'], PDO::PARAM_INT);
    $update_specification = $request->execute();    
      
    $request->closeCursor();

    return $update_specification;
}