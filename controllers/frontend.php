<?php

require_once('models/Article.php');

//afficher les posts
function displayPosts(){
    $article = new Article();
    $article->connect(); //connexion à la bdd grace à la classe ConnectDB.php
    $req = $article->getPosts(); //mise en place de la requête SQL, return objet PDO en fetch
    $article->hydrate($req); //hydratation 

    require('views/articleView.php');
}
