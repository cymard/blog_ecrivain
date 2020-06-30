<?php

require 'Model.php';

class Article extends Model{
    
    private $content;
    private $title;
    private $date;
    private $id;


    //les getteurs
    public function getId(){
        return $this->id;
    }

    public function getContent(){
       return $this->content;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDate(){
        return $this->date;
    }

    
    //les setteurs
    public function setContent($content){
        if(is_string($content)){
            $this->content = $content;
        }  
    }

    public function setTitle($title){
        if(is_string($title)){
            $this->title = $title;
        }
    }

    public function setDate($date){
        $this->date = $date;//verif regex
    }

    public function setId($id){
        if(is_int($id)){
            $this->id = $id;
        }
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
            }
        }
    }

    public function hydrateV2(array $donnees){
        //hydrate adapté au return de fetchAll()
        for($i = 0;$i < count($donnees); $i++ ){
            $this->setTitle($donnees[$i]['title']);
            $this->setContent($donnees[$i]['content']);
            $this->setId($donnees[$i]['id']);
            $this->setDate($donnees[$i]['date']);
        }

        // //titres
        // $this->setTitle($donnees[0]['title']);
        // $this->setTitle($donnees[1]['title']);
        // $this->setTitle($donnees[2]['title']);

        // //content
        // $this->setContent($donnees[0]['content']);
        // $this->setContent($donnees[1]['content']);
        // $this->setContent($donnees[2]['content']);
    }


}
