<?php

namespace models;

require_once 'Model.php';

class Account extends Model{

    private $username;
    private $password;

    function __construct() {
        parent::__construct();
    }

    public function setUsername($username){
        if(is_string($username)){
            $this->username = $username;
        }
        
    }

    public function setPassword($password){
        if(is_string($password)){
            $this->password = $password;
        }
        
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getAccount($username){
        $donnees = $this->queryBuilder->getAccountByUsername($username); //renvoie username et password

        if ($donnees == true){ // si le compte existe
            $this->hydrate($donnees);
        }
    }

}