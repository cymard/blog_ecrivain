<?php

namespace router;

use controllers\ControllerArticle;
use controllers\ControllerAdmin;
use controllers\ControllerAdminArticle;


class Router {

    private $url;
    private $controllerArticle;
    private $controllerAdmin;
    

    public function __construct(){
        $this->controllerArticle = new ControllerArticle();
        $this->controllerAdmin = new ControllerAdmin();
        $this->controllerAdminArticle = new ControllerAdminArticle();
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
                break;

                case $this->url[0] === 'admin' && $this->url[1] === 'edit' && isset($this->url[2]) && is_numeric($this->url[2]) :
                    $this->controllerAdminArticle->displayPost($this->url[2]);
                break;

                    
                //method POST :
                case $this->url[0] === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST': 
                    $this->controllerAdmin->connection();
                break;

                case $this->url[0] === 'admin' && $this->url[1] === 'creation' && $_SERVER['REQUEST_METHOD'] === 'POST':
                    $this->controllerAdminArticle->createArticle();
                break;

                case $this->url[0] === 'admin' && $this->url[1] === 'edit' && $this->url[2] === 'article' && isset($this->url[3]) && is_numeric($this->url[3]) && $_SERVER['REQUEST_METHOD'] === 'POST':
                    $this->controllerAdminArticle->editPost($this->url[3]);
                break;


                //method DELETE :
                case $this->url[0] === 'admin' && $this->url[1] === 'supprimer' && isset($this->url[2]) && is_numeric($this->url[2]) : //test $_SERVER['REQUEST_METHOD'] === 'DELETE'
                    $this->controllerAdminArticle->deletePost($this->url[2]);
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





