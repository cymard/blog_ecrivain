<?php



class ControllerArticle {

    function displayPosts(){
        require 'models\Article.php';

        $article = new Article(); //instance de la class Article extends de model.php
        $article->returnGetPosts();


        // $article = new Article(); //instance de la class Article extends de model.php
        // $PDO = $article->connection(); //$PDO contient le return de new PDO (connexion à la bdd)
        // $req = $article->reqPosts($PDO); //$req est egal objet PDO->query("SELECT * FROM articles") et query retourne un jeu de résultats en tant qu'objet PDOStatement
        // $result = $req->fetchAll();
        // $article->hydrateV2($result); //hydratation des variables de la class Article, on a: $article->getTitle() qui renvoie directement tous les titres alors que $result['title'] renvoie un titre à la fois



        require 'views\articleView.php';

        
    }

}

$test = new ControllerArticle();

