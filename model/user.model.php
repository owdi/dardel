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
    $request->closeCursor();
    return $user;
}

function get_all_user(){            
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
                                        ');
    $request->execute();
    $users = $request->fetchAll();
    $request->closeCursor();
    return $users;
}

function set_user($param) {
    $request = $GLOBALS['bdd']->prepare('INSERT INTO user (login, password, email, account_type_id, status, created_date)
                                         VALUES (                                            
                                            :login,
                                            :password,
                                            :email,
                                            :account_type_id,
                                            :status,
                                            :created_date )'
                                        );
    $create_user = $request->execute(array(  'login'            => $param['login'],
                                             'password'         => $param['password'], 
                                             'email'            => $param['email'], 
                                             'account_type_id'  => 2, 
                                             'status'           => 1, 
                                             'created_date'     => time() 
                                             ));    
    //var_dump($GLOBALS['bdd']->errorInfo()); 
    $request->closeCursor();
    return $create_user;
}