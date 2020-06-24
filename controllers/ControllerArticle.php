<?php



class ControllerArticle {

    function displayPosts(){
        require '..\models\Article.php';

        $article = new Article(); //instance de la class Article extends de model.php
        $PDO = $article->connection(); //$PDO contient le return de new PDO (connexion à la bdd)
        $req = $article->getPosts($PDO); //$req est egal objet PDO->query("SELECT * FROM articles") et query retourne un jeu de résultats en tant qu'objet PDOStatement

        require '..\views\articleView.php'; //permet d'avoir accès aux variables de displayPosts();

        // $result = $req->fetch(); //methode fetch() de PDOStatement 
        // $article->hydrate($result); //hydratation des variables de la class Article

        
    }

}

$test = new ControllerArticle();

