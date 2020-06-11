<?php

class ConnectDb extends Config {

    public function connect(){

        try {
            $this->$dbh = new PDO('mysql:host='.$this->$host.';dbname='.$this->$dbname.';charset='.$this->$charset.'', $this->$user, $this->$pass);
        }
        catch(PDOException $Exception){
            throw new MyDatabaseException( $Exception->getMessage() , $Exception->getCode());
        }
    }
}