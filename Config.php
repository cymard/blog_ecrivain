<?php

class Config {
    private $host = 'localhost';
    private $dbname = 'blog_ecrivain';
    private $charset = 'UTF-8';
    private $user = 'root';
    private $pass = '';

    public function getHost(){
        return $this->$host;
    }

    public function getDbname(){
        return $this->$dbname;
    }

    public function getCharset(){
        return $this->$charset;
    }

    public function getUser(){
        return $this->$user;
    }

    public function getPass(){
        return $this->$pass;
    }
}