<?php

class Router {

    public function accueil(){
        require 'controllers\ControllerArticle.php';

        $url = '';

        if(isset($_GET['url'])){
            $url = explode('/',$_GET['url']);
            
            if($url[0] == 'accueil'){
                $test->displayPosts();
                
            }else{
                //page d'erreur
                $test->displayPosts();
            }
        }else{
            $test->displayPosts();
        }

    }




}





