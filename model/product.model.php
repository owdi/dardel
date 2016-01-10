<?php

function setProduct($param)
{
    $request = $GLOBALS['bdd']->prepare('INSERT INTO product (title, description, language_id, category_id, picture_id, material_id, status, created_date)
                                         VALUES (
                                            :title,
                                            :description,
                                            :language_id,
                                            :category_id,
                                            :picture_id,
                                            :material_id,
                                            :status,
                                            :created_date
                                            )'
    );

    $request->bindValue(':title', $param['title'], PDO::PARAM_STR);
    $request->bindValue(':description', $param['description'], PDO::PARAM_STR);
    $request->bindValue(':language_id', $param['language_id'], PDO::PARAM_INT);
    $request->bindValue(':category_id', $param['category_id'], PDO::PARAM_INT);
    $request->bindValue(':picture_id', $param['picture_id'], PDO::PARAM_INT);
    $request->bindValue(':material_id', $param['material_id'], PDO::PARAM_INT);
    $request->bindValue(':status', $param['status'], PDO::PARAM_INT);
    $request->bindValue(':created_date', time(), PDO::PARAM_INT);

    $create_product = $request->execute();
    $request->closeCursor();

    return $create_product;
}
