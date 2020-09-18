<?php

namespace controllers;

use models\comment;

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
        $this->checkSession(); //pas nécessaire car method = delete ?
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
        header("Location: http://localhost/blog_ecrivain/admin/signaler");

        $comment =  new Comment();
        $comment->ignoreComment($id);
    }

    public function postComment($id){
        header("Location: http://localhost/blog_ecrivain/article/$id");

        $comment = new Comment();
        $comment->postComment($id,$_POST['username'],$_POST['comment']);
    }

}