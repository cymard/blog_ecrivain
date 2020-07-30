<?php

namespace router;

use controllers\ControllerArticle;
use controllers\ControllerAdmin;


class Router {

    private $url;
    private $controllerArticle;
    private $controllerAdmin;
    

    public function __construct(){
        $this->controllerArticle = new ControllerArticle();
        $this->controllerAdmin = new ControllerAdmin();
    }


    public function init(){

        if(isset($_POST['login']) && isset($_POST['password'])){

            $this->controllerAdmin->connection();

        }else if(isset($_GET['url'])){

            $this->url = explode('/',$_GET['url']);

            $this->home();
            $this->post();
            $this->admin();

        }else{

            //appeler la page d'accueil
            $this->controllerArticle->displayPosts();

        }



    }


    public function home(){

        if($this->url[0] == 'accueil'){

            $this->controllerArticle->displayPosts();
        }

    }


    public function post(){

        if($this->url[0] == 'article' && isset($this->url[1]) && (int)$this->url[1]){

            $this->controllerArticle->displayPost($this->url[1]);
            
        }
            
    }


    public function admin(){

        if($this->url[0] == 'admin'){

            $this->controllerAdmin->login();

            //pages admin (il faut deja etre connecté pour se deplacer dans le back-office)

            // if($this->url[1] == 'accueil'){

            //     //accueil
                
            // }
            
        }

    }


}





