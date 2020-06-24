<?php

require '..\controllers\ControllerArticle.php';

try{

    $url = '';
    if(isset($_GET['url'])){
        $url = explode('/',$_GET['url']);
        
        if($url[0] == 'accueil'){
            $test->displayPosts();
            
        }else{
            //page d'erreur
            $test->displayPosts();
        }
    }
    
}catch(Exception $e){
    echo 
    'Erreur : '.$e->getMessage().
    '<br>Erreur code : '.$e->getCode().
    '<br>Erreur fichier : '.$e->getFile().
    '<br>Erreur ligne : '.$e->getLine();
}

