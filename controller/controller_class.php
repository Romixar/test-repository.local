<?php

abstract class Articles{
    
    public $db;//объект БД
    
    public function __construct(){
        require_once __DIR__.'/../model/database_class.php';
        $this -> db = new DataBase();
    }
    
    abstract public function viewNews();
    
    
    
}

class News extends Articles{
    
    
    public function viewNews(){
        
        $this -> db -> selectItem();
        
    }
    
}

$news = new News();
$news -> viewNews();




?>