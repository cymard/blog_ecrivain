<?php

namespace controllers;

use models\Article;

class ControllerAdminArticle {

    public function checkSession(){
        //si la session n'existe pas, renvoyer sur la page du login
        if(!isset($_SESSION['password']) && !isset($_SESSION['username'])){
            header("Location: http://localhost/blog_ecrivain/admin");
        }
    }

    function displayPost($id){   
        $this->checkSession();
        $article = new Article();
        $hydratedArticle = $article->getPost($id);

        require '.\views\backoffice\editAdmin.php';
    }

    public function deletePost($id){
        // bouton supprimer
        $this->checkSession();
        $article = new Article();
        $article->deletePost($id);
        header("Location: http://localhost/blog_ecrivain/admin/accueil"); //nous renvoie sur l'accueil admin apres suppression 

    }

    public function editPost($id){
        $this->checkSession();
        header("Location: http://localhost/blog_ecrivain/admin/accueil"); //nous renvoie sur l'accueil admin

        $article = new Article();
        $title = $_POST['title'];
        $content = $_POST['content'];

        $article->editPost($id,$title,$content);

    }

    public function createArticle(){
        $this->checkSession();
        
        header("Location: http://localhost/blog_ecrivain/admin/accueil"); //nous renvoie sur l'accueil admin

        $article = new Article();
        $title = $_POST['title'];
        $content = $_POST['content'];

        $article->createPost($title,$content);
    }

}