<?php
function get_all_category($language){            
    $request = $GLOBALS['bdd']->prepare('SELECT 
                                            category.category_id,
                                            category_description.category_title,
                                            category.status, 
                                            category.created_date,
                                            category.updated_date 
                                        FROM category 
                                        INNER JOIN category_description ON(category.category_id = category_description.category_id)
                                        WHERE category_description.language_id = :language
                                        ');
    $request->execute(array( 'language'  => $language));
    $category = $request->fetchAll();
    $request->closeCursor();
    return $category;
}

function set_category($param) {
    $request = $GLOBALS['bdd']->prepare('INSERT INTO category (status, created_date)
                                         VALUES (                                            
                                            :status,
                                            :created_date
                                            )'
                                        );
    $create_category = $request->execute(array( 'status'         => 1, 
                                                'created_date'   => time(),
                                             ));    
    //var_dump($GLOBALS['bdd']->errorInfo());
    $lastInsertId = $GLOBALS['bdd']->lastInsertId();
    set_category_description($param, $lastInsertId);
    
    $request->closeCursor();
    return $create_category;
}

function set_category_description($param, $lastInsertId) {    
    $request = $GLOBALS['bdd']->prepare('INSERT INTO category_description (category_id, category_title, language_id, status, created_date)
                                         VALUES (
                                            :category_id,
                                            :category_title,
                                            :language_id,
                                            :status,
                                            :created_date
                                            )'
                                        );
    $create_category = $request->execute(array( 'category_id'       => $lastInsertId,
                                                'category_title'    => $param['category_title'],
                                                'language_id'       => $param['language'],
                                                'status'            => 1, 
                                                'created_date'      => time(),
                                             ));    
    //var_dump($GLOBALS['bdd']->errorInfo()); 
    $request->closeCursor();
    return $create_category_description;
}