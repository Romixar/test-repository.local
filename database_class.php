<?php
require_once __DIR__.'/config_class.php';
require_once __DIR__.'/db_class.php';

class DataBase extends DB{
    
    public function __construct(){
        parent::__construct(Config::DB_HOST,Config::DB_USER,Config::DB_PASS,Config::DB_name);
    }
    
    
    
    
    
    
    
}






?>