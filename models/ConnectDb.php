<?php

require('config.php');

class ConnectDb extends Config {

    protected $db;

    public function connect(){
        $this->$db = new PDO('mysql:host='.$this->getHost().';dbname='.$this->getDbname().';charset='.$this->getCharset().'', $this->getUser(), $this->getPass());
        return $this->$db;
    }
}