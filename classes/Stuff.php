<?php

class Stuff{
    
    private $db;
    
    public function __construct($db){
        
        $this->db = $db;
      
    }
    
    public function get_stuff(){
      
       
           $sql = "SELECT * FROM my_nums";
        $stmt= $this->db->query($sql);
        
        $stuff = $stmt->fetchAll(PDO::FETCH_OBJ);
      
       if(count($stuff)){
           echo "good";
            return $stuff;
       }else{
           echo "bad";
           return false;
       }
       
      
        
    }
    
}