<?php

namespace controllers;

use models\Article;
use models\Comment;



class ControllerArticle {

    function displayPosts(){ 

        $article = new Article();
        $data = $article->getPosts();

        require 'views\indexView.php';
    }

    function displayPostAndComments($id){   
        
        $article = new Article();
        $hydratedArticle = $article->getPost($id);
        
        $comment = new Comment();
        $result = $comment->displayComments($id);
        
        require 'views\postView.php';
    }

}



