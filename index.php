<?php

include('controllers/frontend.php');

try{
    if(isset($_GET['action'])){
        if($_GET['action'] == 'accueil'){
            displayPosts();
        }
    }else{
        displayPosts();
    }
    
}catch(Exception $e){
    echo 'Erreur : '.$e->getMessage();
}

