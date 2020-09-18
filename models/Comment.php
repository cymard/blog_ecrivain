<?php 

namespace models;

require_once 'Model.php';

class Comment extends Model{
    private $username;
    private $content;
    private $date;
    private $postId;
    private $id;
    private $report;


    function __construct(){
        parent::__construct();
    }

    // getteurs
    public function getUsername(){
        return $this->username;
    }

    public function getContent(){
        return $this->content;
    }

    public function getDate(){
        return $this->date;
    }

    public function getPostId(){
        return $this->postId;
    }

    public function getId(){
        return $this->id;
    }

    public function getReport(){
        return $this->report;
    }


    // setteurs
    public function setUsername($username){
        $this->username = $username;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function setPostId($postId){
        $this->postId = $postId;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setReport($report){
        $this->report = $report;
    }


    // les méthodes
    public function displayComments($id){
        $data = $this->queryBuilder->displayCommentsOfPost($id);

        $array = [];
        for($i = 0; $i < count($data); $i++){
            $comment = new Comment();
            $comment->hydrate($data[$i]);// tableau de données
            array_push($array,$comment);
        }
        return $array;
    }
    
    public function deleteComment($id){
        $this->queryBuilder->deleteComment($id);
    }

    public function addReportComment($id){
        $this->queryBuilder->addReportComment($id);

    }

    public function displayReportComments(){
        $data = $this->queryBuilder->displayReportComments();

        $array = [];
        for($i = 0; $i < count($data); $i++){
            $comment = new Comment();
            $comment->hydrate($data[$i]);// tableau de données
            array_push($array,$comment);
        }
        return $array;

    }

    public function ignoreComment($id){
        $this->queryBuilder->ignoreComment($id);
    }

    public function postComment($id,$username,$comment){
        $this->queryBuilder->postComment($id,$username,$comment);
    }

}