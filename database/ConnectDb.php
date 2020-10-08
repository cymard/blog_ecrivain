<?php

namespace database;

use PDO;

class ConnectDb {

    public function connect(){
        require 'config.php'; 

        try{
            $db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'].'',$config['user'] ,$config['pass']);
            // Pour forcer PDO à utiliser des requêtes préparées réelles, il faut le préciser après la connexion à la base de données.
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // La ligne suivante indique à PDO de bien générer une erreur fatale si un problème survient. On peut détecter et gérer les problèmes de cette manière.
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch(Exception $e){
            echo 'Erreur message: '.$e->getMessage().'<br> Erreur code:'.$e->getCode();
            echo "<br>L'exception a été créée depuis la ligne : " . $e->getLine();

        }
    }
}


