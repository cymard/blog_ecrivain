<?php

namespace database;

use database\ConnectDb;


class QueryBuilder {

    private $pdo;

    public function __construct(){
        $connection = new ConnectDb(); 
        $this->pdo = $connection->connect(); // return l'objet PDO
    }

    public function getPosts(){
        // $query = $this->pdo->query("SELECT * FROM articles ORDER BY id DESC");
        // return $query->fetchAll();

        $prepare = $this->pdo->prepare("SELECT * FROM articles ORDER BY id DESC");
        $prepare->execute();
        return $prepare->fetchAll();
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

    public function displayCommentsOfPost($id){
        $prepare = $this->pdo->prepare("SELECT * FROM comments WHERE post_id=? ORDER BY id DESC ");
        $prepare->execute(array($id));
        return $prepare->fetchAll();
    }

    public function deleteComment($id){
        $prepare = $this->pdo->prepare("DELETE FROM comments WHERE id=?");
        $prepare->execute(array($id));
        return $prepare->fetch();
    }

    public function addReportComment($id){
        $prepare = $this->pdo->prepare("UPDATE `comments` SET `report`=1 WHERE id =?");
        $prepare->execute(array($id));
    }

    public function displayReportComments(){
        // $query = $this->pdo->query("SELECT * FROM comments WHERE report = 1 ORDER BY date DESC");
        // return $query->fetchAll();
        $prepare = $this->pdo->prepare("SELECT * FROM comments WHERE report = 1 ORDER BY date DESC");
        $prepare->execute();
        return $prepare->fetchAll();
    }

    public function ignoreComment($id){
        $prepare = $this->pdo->prepare("UPDATE `comments` SET `report`=0 WHERE id =?");
        $prepare->execute(array($id));
    }

    public function postComment($id,$username,$comment){
        $prepare = $this->pdo->prepare("INSERT INTO `comments`(`post_id`, `content`, `date`, `username`, `report`) VALUES (:post_id,:content,CURRENT_DATE(),:username,0)");
        $prepare->execute(array(':post_id' => $id,':content' => $comment, ':username' => $username));
    }
    
}
