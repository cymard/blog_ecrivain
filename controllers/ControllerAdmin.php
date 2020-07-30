<?php

namespace controllers;

use models\User;


class ControllerAdmin{
    

    public function login(){

        require 'views\backoffice\loginAdmin.php';
    }

    public function connection(){

        $user = new User();
        $user->getTheLogin($_POST['login']); //cherche le mdp à partir du login (querybuilder), ensuite hydrate le user avec les infos

        if(password_verify($_POST['password'],$user->getPassword())){

            require 'views\backoffice\accueilAdmin.php'; //appeler la page d'accueil pour l'admin

        }else{

            echo '<p style="color: red;">Pas le bon login ou password</p>';
            $this->login();

            //appeler la page login en passant par le router, header("Location: http://www.example.com/")?

        }

    }

    
}



