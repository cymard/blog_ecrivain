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

    
    // les setteurs
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
        $pattern = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
        if(preg_match($pattern,$date)){
            $this->date = $date;
        }
        
    }

    public function setId($id){
        if((int)$id){
            $this->id = $id;
        }
    }

    // les méthodes
    public function getPosts(){
        $result = [];
        $posts = $this->queryBuilder->getPosts(); // on prend les infos sur tous les articles depuis la bdd
        // on creer une instance de la classe d'article, on l'hydrate avec les données recupérées et on le push dans le tableau
        for($i = 0; $i<count($posts);$i++){
            $article = new Article();
            $article->hydrate($posts[$i]);
            array_push($result,$article);
            
        }
        return $result;

    }

    public function getPost($id){
        $post = $this->queryBuilder->getPost($id); // on prend les infos sur l'article depuis la bdd
        $article = new Article();
        $result = $article->hydrate($post); // on hydrate l'instance de la class article avec les données recupérées
        return $article;
    }

    public function deletePost($id){
        $this->queryBuilder->deletePost($id);
    }

    public function createPost($title,$content){
        $this->queryBuilder->createPost($title,$content);

    }

    public function editPost($id,$title,$content){
        $this->queryBuilder->editPost($id,$title,$content);
        
    }


}
