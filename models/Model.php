<?php



class Model{

    protected $queryBuilder;

    public function __construct(){
        require_once 'QueryBuilder.php';
        $this->queryBuilder = new QueryBuilder();
    }

}
