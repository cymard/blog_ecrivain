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

    public function getAccountByUsername($username){
        $prepare = $this->pdo->prepare("SELECT username,password FROM account WHERE username=?");
        $prepare->execute(array($username));
        return $prepare->fetch();
    }

    public function deletePost($id){
        $prepare = $this->pdo->prepare("DELETE FROM articles WHERE id=?");
        $prepare->execute(array($id));
    }

    public function createPost($title,$content){
        $prepare = $this->pdo->prepare("INSERT INTO `articles`(`title`, `content`, `date`) VALUES (?,?,CURRENT_DATE())");
        $prepare->execute(array($title,$content));
    }

    public function editPost($id,$title,$content){
        $prepare = $this->pdo->prepare("UPDATE `articles` SET `title`= :title,`content`= :content,`date`=CURRENT_DATE() WHERE id = :id"); // mise à jour de la date lors d'une modification
        $prepare->execute(array(':id' => $id,':title' => $title,':content' => $content));
    }

}
