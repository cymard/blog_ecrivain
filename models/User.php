<?php

namespace models;

require_once 'Model.php';

class User extends Model{

    private $login;
    private $password;

    function __construct() {
        parent::__construct();
    }

    public function setLogin($login){
        if(is_string($login)){
            $this->login = $login;
        }
        
    }

    public function setPassword($password){
        if(is_string($password)){
            $this->password = $password;
        }
        
    }

    public function getLogin(){
        return $this->login;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getTheLogin($login){
        $donnees = $this->queryBuilder->getLogin($login); //renvoi le login et password
        $this->hydrate($donnees);
    }

}