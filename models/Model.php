<?php

namespace models;

use models\QueryBuilder;



class Model{

    protected $queryBuilder;

    public function __construct(){
        $this->queryBuilder = new QueryBuilder();
    }

    //hydratation des données

    public function hydrate(array $donnees){
        //$donnees correspond à un tableau PDO,$donnes['title'] = titre ;
        foreach($donnees as $key => $value){
            //on cherche à pouvoir selectionner tous les setteurs
            $method = 'set'.ucfirst($key);
            //on verifie que la methode existe
            if(method_exists($this,$method)){   //$this ou Articles(nom de la classe)
                //on appelle la methode en lui attribuant la valeur
                $this->$method($value);
                // echo $method.' et '.$value.'<br>';
            }
        }
    }

}
