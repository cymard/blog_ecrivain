<?php

namespace controllers;

use models\Article;



class ControllerArticle {

    function displayPosts(){ 

        $article = new Article();
        $data = $article->getPosts();

        require 'views\indexView.php';
    }

    function displayPost($id){   
        
        $article = new Article();
        $data = $article->getPost($id);

        require 'views\postView.php';
    }

}



