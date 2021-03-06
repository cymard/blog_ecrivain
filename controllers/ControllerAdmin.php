<?php
namespace controllers;

session_start();

use models\Account;
use models\Article;
use models\Comment;


class ControllerAdmin{
    
    // aller sur la page login
    public function goToLogin(){

        if(isset($_SESSION['username'])){
            // si la session existe, renvoyer sur la page d'accueil du back office
            header("Location: http://localhost/blog_ecrivain/admin/accueil");

        }else{
            require 'views\backoffice\loginAdmin.php';
        }
    }

    // connexion au compte Admin
    public function connection(){

        if(isset($_POST['username']) && isset($_POST['password']) && preg_match('`^([a-zA-Z0-9-_]{2,36})$`', $_POST['username']) && strlen($_POST['password'])<= 255 ){
            
            // vérification des données
            // pas de script
            $content = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            // pas de caractères inutiles en début de chaine
            $contentTrim = trim($content);

            // pas d'antislashs
            $username = stripslashes($contentTrim);

            // fin de vérification des données


            $Account = new Account();
            $Account->getAccount($username); //cherche le mdp à partir du username entré dans la bdd, ensuite hydrate le model Account avec les infos
    
            // si le mdp entré correspond au mdp en bdd
            if(password_verify($password,$Account->getPassword())){
                $_SESSION['username'] = $username;
                

                header("Location: http://localhost/blog_ecrivain/admin/accueil");
    
            }else{
    
                $this->getPageErrorConnection();
    
            }

        }else{
            $this->getPageErrorConnection();
        }

    }

    public function checkSession(){
        //si la session n'existe pas, renvoyer sur la page du login
        if(!isset($_SESSION['username'])){
            header("Location: http://localhost/blog_ecrivain/admin");
            exit;
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
 
    public function getPageErrorConnection(){
        echo '<p style="color: red;">Le nom d\' utilisateur ou le mot de passe est incorrecte</p>';
    
        require 'views\backoffice\loginAdmin.php';
    }
}



