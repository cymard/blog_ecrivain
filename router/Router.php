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

    public function post(){
        require 'controllers\ControllerArticle.php';

        $url = '';

        if(isset($_GET['url'])){
            $url = explode('/',$_GET['url']);
            
            if($url[0] == 'article' && isset($url[1]) && (int)$url[1]){

                $controllerArticle->displayPost($url[1]);
                
            }else{
                //page d'erreur
                $controllerArticle->displayPosts();
            }
        }else{
            $controllerArticle->displayPosts();
        }


    }


}





