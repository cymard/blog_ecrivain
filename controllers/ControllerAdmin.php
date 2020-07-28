<?php

use models\User;

class ControllerAdmin{
    

    public function login(){

        require 'views\backoffice\loginAdmin.php';
    }

    public function connection(){

        $user = new User(); //connexion au model.php
        $donnees = $user->theLogin(); //return le login et mdp


        if(password_verify($_POST['password'],$donnees['password'])){

            require 'views\backoffice\accueilAdmin.php'; //appeler la page d'accueil pour l'admin
        }else{
            echo 'pas le bon password';

        }

    }

    
}

$controllerAdmin = new ControllerAdmin();

