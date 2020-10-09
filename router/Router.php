<?php

namespace router;

use controllers\ControllerArticle;
use controllers\ControllerAdmin;
use controllers\ControllerAdminArticle;
use controllers\ControllerComment;


class Router {

    private $url;
    private $controllerArticle;
    private $controllerAdmin;
    private $controllerAdminArticle;
    private $controllerComment;
    

    public function __construct(){
        $this->controllerArticle = new ControllerArticle();
        $this->controllerAdmin = new ControllerAdmin();
        $this->controllerAdminArticle = new ControllerAdminArticle();
        $this->controllerComment = new ControllerComment();
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

                case $this->url[0] === 'article' && $this->url[1] === 'id' && isset($this->url[2]) && is_numeric($this->url[2]) && $this->url[3] === 'signaler' && isset($this->url[4]) && is_numeric($this->url[4]) :
                    $this->controllerComment->reportComment($this->url[2],$this->url[4]);
                break;

                case $this->url[0] === 'article' && isset($this->url[1]) && is_numeric($this->url[1]) :
                    $this->controllerArticle->displayPostAndComments($this->url[1]);
                break;

                case $this->url[0] === 'admin'  && !isset($this->url[1])  :
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

                case $this->url[0] === 'admin' && $this->url[1] === 'article' && isset($this->url[2]) && is_numeric($this->url[2]) && $this->url[3] === 'commentaires':
                    $this->controllerComment->displayCommentsOfArticleForAdmin($this->url[2]);
                break;

                case $this->url[0] === 'admin' && $this->url[1] === 'signaler' :
                    $this->controllerAdmin->getPageSignaler();
                break;

                case $this->url[0] === 'admin' && $this->url[1] === 'ignorer' && isset($this->url[2]) && is_numeric($this->url[2]) :
                    $this->controllerComment->ignoreComment($this->url[2]);
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

                case $this->url[0] === 'poster' && $this->url[1] === 'commentaire'  && $this->url[2] === 'article' && isset($this->url[3]) && is_numeric($this->url[3]) && $_SERVER['REQUEST_METHOD'] === 'POST':
                    $this->controllerComment->postComment($this->url[3]);
                break;


                // DELETE :
                case $this->url[0] === 'admin' && $this->url[1] === 'supprimer' && isset($this->url[2]) && is_numeric($this->url[2]) && $_SERVER['REQUEST_METHOD'] === 'POST': 
                    $this->controllerAdminArticle->deletePost($this->url[2]);
                break;

                case $this->url[0] === 'admin' && $this->url[1] === 'commentaire' && $this->url[2] === 'supprimer' && isset($this->url[3]) && is_numeric($this->url[3]) && $_SERVER['REQUEST_METHOD'] === 'POST':
                    $this->controllerComment->deleteComment($this->url[3]);
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





