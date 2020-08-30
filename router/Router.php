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

        // print_r($_SERVER['REQUEST_METHOD']);
        if(isset($_GET['url'])){
            $this->url = explode('/',$_GET['url']);

            switch ($this->url) {

                //method GET :
                case $this->url[0] === 'accueil' :
                    $this->controllerArticle->displayPosts();
                break;

                case $this->url[0] === 'article' && isset($this->url[1]) && is_numeric($this->url[1]) :
                    $this->controllerArticle->displayPost($this->url[1]);
                break;

                case $this->url[0] === 'admin' && !isset($this->url[1]) :
                    $this->controllerAdmin->goToLogin();
                break;

                case $this->url[0] === 'admin' && $this->url[1] == 'accueil':
                    $this->controllerAdmin->getPageAccueil();
                break;

                case $this->url[0] === "admin" && $this->url[1] === "creer" :
                    $this->controllerAdmin->getPageCreate();
                    
                //method POST :
                case $this->url[0] === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST': 
                    $this->controllerAdmin->connection();
                break;

                //method DELETE :
                case $this->url[0] === 'admin' && $this->url[1] === 'supprimer' && isset($this->url[2]) && is_numeric($this->url[2]):
                    $this->controllerAdmin->deletePost($this->url[2]);
                break;

                default :
                // appeler la page d'accueil
                $this->controllerArticle->displayPosts();

            }

        }else{

            //appeler la page d'accueil
            $this->controllerArticle->displayPosts();

        }

    }


   

}





