<?php

function get_language()
{
    $request = $GLOBALS['bdd']->prepare('SELECT *
                                        FROM language 
                                        ');
    $request->execute();
    $language = $request->fetchAll();
    $request->closeCursor();

    return $language;
}