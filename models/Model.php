<?php


class Model{

    public function __construct(){
        require 'QueryBuilder.php';
        return $querybuilder = new QueryBuilder(); //return pdo
    }

    public function returnGetPosts(){
        require 'QueryBuilder.php';
        return $this->getPosts();
    }

    public function hydrate(){

    }
}

$model = new Model(); //return objet pdo
$model->returnGetPosts(); //return le fetchAll

