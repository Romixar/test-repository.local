<?php
//header('Content-Type: charset="utf-8"');
//header('Content-Type: lang="ru-RU"');

require_once __DIR__.'/../config_class.php';
require_once __DIR__.'/../db_class.php';


class DataBase extends DB{
    
    public function __construct(){
        parent::__construct(Config::DB_HOST,Config::DB_USER,Config::DB_PASS,Config::DB_NAME);
    }
    
    
    public function selectItem(){
        if($result = $this -> db -> query("SELECT `title` FROM `news`")){
            printf("Select вернул %d строк.\n", $result -> num_rows);
        }
    }
    
    public function insertItem($title, $author){
        if($result = $this -> db -> query("INSERT INTO `news` (`title`,`author`) VALUES ('".$title."','".$author."')")){
            echo $result;
        }
    }
    
    public function updateItem($title, $author){
        if($result = $this -> db -> query("UPDATE `news` SET `title`='".$title."', `author`='".$author."' WHERE `id` = 1")){
            echo $result;
        }
    }
    
    
    
    
    
    
}



//$abc -> selectItem();
//$abc -> insertItem();
//$abc -> updateItem('Новость 1','РОМИК');

?>