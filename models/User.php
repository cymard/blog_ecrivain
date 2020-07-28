<?php

namespace models;

require_once 'Model.php';

class User extends Model{

    function __construct() {
        parent::__construct();
    }

    public function theLogin(){
        return $this->queryBuilder->getLogin();
    }

}