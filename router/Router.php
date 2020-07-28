<?php

namespace router;


class Router {

    private $url;

    public function init(){
    
        if(isset($_GET['url'])){
            $this->url = explode('/',$_GET['url']);

            $this->home();
            $this->post();
            $this->admin();
        }else{
            //appeler la page d'accueil
            require 'controllers\ControllerArticle.php';
            $controllerArticle->displayPosts();

        }
    }


    public function home(){

        if($this->url[0] == 'accueil'){
            require 'controllers\ControllerArticle.php';
            $controllerArticle->displayPosts();
        }

    }


    public function post(){

        if($this->url[0] == 'article' && isset($this->url[1]) && (int)$this->url[1]){
            require 'controllers\ControllerArticle.php';

            $controllerArticle->displayPost($this->url[1]);
            
        }
            
    }


    public function admin(){

        if($this->url[0] == 'admin'){
            // require 'controllers\ControllerArticle.php';
            require 'controllers\ControllerAdmin.php';
            $controllerAdmin->login();
            
        }

    }

}





