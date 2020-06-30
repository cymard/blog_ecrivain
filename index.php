<?php

require 'router\Router.php';

try{
    // http://localhost/blog_ecrivain/
    $router = new Router();
    $router->accueil();

    
}catch(Exception $e){
    echo 
    'Erreur : '.$e->getMessage().
    '<br>Erreur code : '.$e->getCode().
    '<br>Erreur fichier : '.$e->getFile().
    '<br>Erreur ligne : '.$e->getLine();
}
    
        