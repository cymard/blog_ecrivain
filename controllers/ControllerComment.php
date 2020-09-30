<?php

namespace controllers;

use models\Comment;


class ControllerComment {

    public function checkSession(){
        //si la session n'existe pas, renvoyer sur la page du login
        if(!isset($_SESSION['password']) && !isset($_SESSION['username'])){
            header("Location: http://localhost/blog_ecrivain/admin");
        }
    }

    public function displayCommentsOfArticleForAdmin($id){
        $this->checkSession();

        $comment = new Comment();
        $result = $comment->displayComments($id);

        require '.\views\backoffice\commentAdmin.php';
    }

    public function deleteComment($id){
        $this->checkSession();
        header("Location: http://localhost/blog_ecrivain/admin/accueil");
        
        $comment = new Comment();
        $comment->deleteComment($id);
    }

    public function reportComment($idPost,$idComment){
        header("Location: http://localhost/blog_ecrivain/article/$idPost");

        $comment = new Comment();
        $comment->addReportComment($idComment);
    }

    public function ignoreComment($id){
        $this->checkSession();
        header("Location: http://localhost/blog_ecrivain/admin/signaler");

        $comment =  new Comment();
        $comment->ignoreComment($id);
    }

    public function postComment($id){
        header("Location: http://localhost/blog_ecrivain/article/$id");

        // vérification des données
        if(isset($_POST['username']) && isset($_POST['comment']) && preg_match('`^([a-zA-Z0-9-_]{2,36})$`', $_POST['username'])){

            // pas de script
            $username = htmlspecialchars($_POST['username']);
            $contentNoScript = htmlspecialchars($_POST['comment']);

            // pas de caractères inutiles en début de chaine
            $contentTrim = trim($contentNoScript);

            // pas d'antislashs
            $content = stripslashes($contentTrim);

            $comment = new Comment();
            $comment->postComment($id,$username,$content);
        }
        
    }

}