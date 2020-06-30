<?php

class ConnectDb {

    private $host ;
    private $dbname ;
    private $charset ;
    private $user ;
    private $pass ;

    public function setHost($variable){
        if(is_string($variable)){
            $this->host = $variable;
        }  
    }

    public function setDbname($variable){
        if(is_string($variable)){
            $this->dbname = $variable;
        }  
    }

    public function setCharset($variable){
        if(is_string($variable)){
            $this->charset = $variable;
        }  
    }

    public function setUser($variable){
        if(is_string($variable)){
            $this->user = $variable;
        }  
    }

    public function setPass($variable){
        if(is_string($variable)){
            $this->pass = $variable;
        }  
    }



    public function connect(){
        try{
            $db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset='.$this->charset.'',$this->user ,$this->pass);
            return $db;
        }catch(Exception $e){
            echo 'Erreur message: '.$e->getMessage().'<br> Erreur code:'.$e->getCode();
            echo "<br>L'exception a été créée depuis la ligne : " . $e->getLine();

        }
    }
}


require 'database\config.php'; 
//Pouvoir se connecter à la base de données
$connection = new ConnectDb();

//assignation des valeurs de config.php dans l'objet pdo pour se connecter à la bdd
$connection->setHost($config['host']);
$connection->setDbname($config['dbname']);
$connection->setCharset($config['charset']);
$connection->setUser($config['user']);
$connection->setPass($config['pass']);