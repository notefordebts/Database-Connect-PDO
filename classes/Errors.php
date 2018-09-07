<?php

class Errors{
    
    public static function catch_errors($e){
        
        $error = "\n".date("m-d-Y H:i:s")."\n";
        $error .= "Error Message = ".$e->getMessage()."\n";
        $error .= "Error in File = ".$e->getFile()."\n";
        $error .= "in line numer".$e->getLine()."\n";
        
        $file = "logs/mainLog.txt";
        if(is_dir("logs")){
            file_put_contents($file, $error,FILE_APPEND);
        }else{
            mkdir("logs");
             file_put_contents($file, $error,FILE_APPEND);
        }
       
    }
    
    
    
    
    
    
}