<?php

class QueryBuilder {

    public function getPosts($variable){

        return $variable->query("SELECT * FROM articles");
        
    }
}

$queryBuilder = new QueryBuilder();