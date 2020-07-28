<?php

require 'vendor/autoload.php';
use router\Router;


try{
    // http://localhost/blog_ecrivain/ 

    if(isset($_POST['login']) && isset($_POST['password'])){
        require 'controllers\ControllerArticle.php';
        require 'controllers\ControllerAdmin.php';
        $controllerAdmin->connection();
    }else{
        $router = new Router();
        $router->init();
    }




    
}catch(Exception $e){
    echo 
    'Erreur : '.$e->getMessage().
    '<br>Erreur code : '.$e->getCode().
    '<br>Erreur fichier : '.$e->getFile().
    '<br>Erreur ligne : '.$e->getLine();
}
    
        