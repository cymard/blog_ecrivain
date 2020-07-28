<?php

namespace database;

use PDO;

class ConnectDb {

    public function connect(){
        require 'config.php'; 

        try{
            $db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'].'',$config['user'] ,$config['pass']);
            return $db;
        }catch(Exception $e){
            echo 'Erreur message: '.$e->getMessage().'<br> Erreur code:'.$e->getCode();
            echo "<br>L'exception a été créée depuis la ligne : " . $e->getLine();

        }
    }
}


