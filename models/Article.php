<?php

namespace models;


require_once 'Model.php';



class Article extends Model{

    private $content;
    private $title;
    private $date;
    private $id;

    function __construct() {
        parent::__construct();
    }

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
        if((int)$id){
            $this->id = $id;
        }
    }

    public function getPosts(){
        $result = [];
        $posts = $this->queryBuilder->getPosts();
        for($i = 0; $i<count($posts);$i++){
            $article = new Article();
            $article->hydrate($posts[$i]);
            array_push($result,$article);
            
        }
        return $result;

    }

    public function getPost($id){
        $post = $this->queryBuilder->getPost($id);
        $article = new Article();
        $result = $article->hydrate($post);
        return $post;
    }




}
