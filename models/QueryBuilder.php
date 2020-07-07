<?php


class QueryBuilder {

    private $pdo;

    public function __construct(){
        require_once 'database\ConnectDb.php'; 
        $connection = new ConnectDb(); 
        $this->pdo = $connection->connect(); // return l'objet PDO
    }

    public function getPosts(){

        $query = $this->pdo->query("SELECT * FROM articles");
        return $query->fetchAll();
        
    }

}
