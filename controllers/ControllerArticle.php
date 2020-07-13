<?php



class ControllerArticle {

    function displayPosts(){
        require 'models\Article.php';

        $article = new Article();
        $data = $article->getPosts();

        require 'views\indexView.php';
    }

    function displayPost($id){
        require 'models\Article.php';
        
        $article = new Article();
        $data = $article->getPost($id);

        require 'views\postView.php';
    }

}

$controllerArticle = new ControllerArticle();

