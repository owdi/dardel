<?php

function get_user($login, $password){            
    $request = $GLOBALS['bdd']->prepare('SELECT 
                                            user_id, 
                                            login, 
                                            password, 
                                            email, 
                                            account_type_id, 
                                            status, 
                                            created_date, 
                                            updated_date 
                                        FROM user 
                                        WHERE login = :login
                                        AND password = :password');
    $request->execute(array('login' => $login, 'password' => $password));
    $user = $request->fetchAll();
    return $user;
}