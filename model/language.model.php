<?php

function get_language(){            
    $request = $GLOBALS['bdd']->prepare('SELECT 
                                            language_id,
                                            language, 
                                            status
                                        FROM language 
                                        ');
    $request->execute();
    $language = $request->fetchAll();
    $request->closeCursor();
    return $language;
}