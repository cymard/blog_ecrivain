<?php
namespace controllers;

session_start();

use models\Account;
use models\Article;
use models\Comment;


class ControllerAdmin{
    

    public function goToLogin(){

        // redirection accueil si la session existe

        if(isset($_SESSION['password']) && isset($_SESSION['username'])){
            //si la session existe, renvoyer sur la page d'accueil du back office
            header("Location: http://localhost/blog_ecrivain/admin/accueil");

        }else{
            require 'views\backoffice\loginAdmin.php';
        }
    }

    public function connection(){

        
        if(isset($_POST['username']) && isset($_POST['password'])){
            $_SESSION['username'] = $_POST['username'];
            $Account = new Account();
            $Account->getAccount($_POST['username']); //cherche le mdp à partir du login (querybuilder), ensuite hydrate le Account avec les infos
    
    
            if(password_verify($_POST['password'],$Account->getPassword())){
                $_SESSION['password'] = $_POST['password'];

                header("Location: http://localhost/blog_ecrivain/admin/accueil");
    
            }else{
    
                echo '<p style="color: red;">Le nom d\' utilisateur ou le mot de passe est incorrecte</p>';
    
                require 'views\backoffice\loginAdmin.php';
    
            }

        }

    }

    public function checkSession(){
        //si la session n'existe pas, renvoyer sur la page du login
        if(!isset($_SESSION['password']) && !isset($_SESSION['username'])){
            header("Location: http://localhost/blog_ecrivain/admin");
        }
    }

    public function getPageAccueil(){
        $this->checkSession();
        // afficher les articles
        $data = $this->displayPosts();
        //  si la session existe, renvoyer sur la page d'accueil du back office
        require 'views\backoffice\accueilAdmin.php';

    }

    public function displayPosts(){
        $article = new Article();
        return  $article->getPosts();
    }

    public function getPageCreate(){
        $this->checkSession();
        require '.\views\backoffice\creerAdmin.php';
    }

    public function getPageSignaler(){
        $this->checkSession();

        $comment = new Comment();
        $data = $comment->displayReportComments();

        require '.\views\backoffice\signalerAdmin.php';
    }
 
}



