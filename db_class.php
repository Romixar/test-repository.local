<?php
mb_internal_encoding('UTF-8');//указание кодировки
abstract class DB{
    
    public $db;// здесь подключение к БД
    
    public function __construct($db_host, $db_user, $db_pass, $db_name){
        
        $this -> db = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if($this -> db -> connect_errno){
            echo "Не удалось подключиться к MySQL: " . $this -> db -> connect_error;
            exit;
        }
        echo 'Всё ок!';
        

    }

    public function __destruct(){
        if($this -> db) mysqli_close($this -> db);
    }
    
    
    
    
}






?>