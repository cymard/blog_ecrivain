<?php

namespace models;

use database\ConnectDb;


class QueryBuilder {

    private $pdo;

    public function __construct(){
        $connection = new ConnectDb(); 
        $this->pdo = $connection->connect(); // return l'objet PDO
    }

    public function getPosts(){

        $query = $this->pdo->query("SELECT * FROM articles");
        return $query->fetchAll();
        
    }

    public function getPost($id){
        $prepare = $this->pdo->prepare("SELECT title,date,content,id FROM articles WHERE id=?");
        $prepare->execute(array($id));
        return $prepare->fetch();
    }

    public function getLogin($login){
        $prepare = $this->pdo->prepare("SELECT login,password FROM account WHERE login=?");
        $prepare->execute(array($login));
        return $prepare->fetch();
    }

}
