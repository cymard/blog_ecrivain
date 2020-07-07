<?php



class ControllerArticle {

    function displayPosts(){
        require 'models\Article.php';

        $article = new Article();
        $data = $article->getPosts();

        require 'views\articleView.php';
    }

}

$controllerArticle = new ControllerArticle();

