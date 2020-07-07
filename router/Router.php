<?php

class Router {

    public function home(){
        require 'controllers\ControllerArticle.php';

        $url = '';

        if(isset($_GET['url'])){
            $url = explode('/',$_GET['url']);
            
            if($url[0] == 'accueil'){
                $controllerArticle->displayPosts();
                
            }else{
                //page d'erreur
                $controllerArticle->displayPosts();
            }
        }else{
            $controllerArticle->displayPosts();
        }

    }




}





