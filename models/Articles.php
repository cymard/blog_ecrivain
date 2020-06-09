<?php

class Articles {
    private $user = "root";
    private $pass = "";
    private $dbh = new PDO('mysql:host=localhost;dbname=blog_ecrivain;charset=UTF8', $this->$user, $this->$pass);
    private $content;
    private $title;
    private $date;


    //les getteurs
    public function getContent(){
       return $this->$content;
    }

    public function getTitle(){
        return $this->$title;
    }

    public function getDate(){
        return $this->$date;
    }

    public function getPass(){
        return $this->$pass;
    }

    public function getUser(){
        return $this->$user;
    }

    //les setteurs pour la connexion à la base de données
    public function setUser($user){
        $this->$user = $user;
    }

    public function setPass($pass){
        $this->$pass = $pass;
    }

    //les actions possibles
    public function getTitleFromDB($id){
        //on selectionne le titre de l'article en fonction de son id
        $queryTitle = $this->$dbh->query("SELECT title FROM articles WHERE id = $id ");

        //afficher la valeur de $queryTitle qui est un objet PDOStatement 
    }

}
