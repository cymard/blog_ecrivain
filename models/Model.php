<?php


class Model{

    protected $db;

    public function connection(){
        //avoir accès aux données, variables, méthodes
        require '..\database\ConnectDb.php';
        require '..\database\config.php'; 

        //Pouvoir se connecter à la base de données
        $this->db = new ConnectDb();

        //assignation des valeurs de config.php dans l'objet pdo pour se connecter à la bdd
        $this->db->setHost($config['host']);
        $this->db->setDbname($config['dbname']);
        $this->db->setCharset($config['charset']);
        $this->db->setUser($config['user']);
        $this->db->setPass($config['pass']);

        //connexion à la bdd
        return $this->db->connect();// return l'objet PDO que return la methode connect()
    }

    public function getPosts($variable){

        return $variable->query("SELECT * FROM articles");
        
    }
}

// $test = new Model();
// $pdo = $test->connection();
// $test->getPosts($pdo);