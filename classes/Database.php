
<?php
 //THE DEFINES FILE IS LOADED IN THE INIT.PHP FILE
class Database{
    private static $_instance = null;
   
    private $host = HOST;
    private $database_name = DATABASE_NAME;
    private $database_user = DATABASE_USER;
    private $database_password = DATABASE_PASSWORD;
    public $con;
    
    
 public function __construct() {
      
       try{ 
           $this->con =  new PDO('mysql:host='.$this->host.';dbname='.$this->database_name.';', $this->database_user, $this->database_password);
            
      }catch (PDOException $e) {
           Errors::catch_errors($e);
         die("no connect");
   
}
    }
    
     public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new Database();
        }
        return self::$_instance;
    }
    
    


    
}

    


?>
