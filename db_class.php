<?php

abstract class DB{
    
    public $db;// здесь подключение к БД
    
    public function __construct($db_host, $db_user, $db_pass, $db_name){
        
        $this -> db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if(!$this -> db){
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        echo "Соединение с MySQL установлено!" . PHP_EOL;
        echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

    }

    public function __destruct(){
        if($this -> db) mysqli_close($this -> db);
    }
    
    
    
    
}






?>