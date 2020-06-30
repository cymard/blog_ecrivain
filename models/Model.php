<?php


class Model{

    public function connection(){
        //avoir accès aux données, variables, méthodes
        require 'database\ConnectDb.php';

        //connexion à la bdd
        return $connection->connect();// return l'objet PDO que return la methode connect()
    }

    public function reqPosts($variable){
        require 'QueryBuilder.php';
        return $queryBuilder->getPosts($variable);
    }
}

