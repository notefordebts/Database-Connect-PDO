<?php
session_start();
//REQUIRES YOUR DEFINES FILE
require_once "includes/defines.php";



//THIS WILL SET YOUR TIMEZONE
date_default_timezone_set("America/Chicago");

//THIS WILL REQUIRE ONCE ALL CLASSES IN CLASSES FOLDER
spl_autoload_register(function($class){
    
    require_once "classes/{$class}.php";
   
});

//REQUIRES CONNECTION.PHP
//require_once "includes/connection.php";
//use $connection to connect


//THIS WILL INCLUDE ALL FUNCTION FILES IN FUNCTION FOLDER
foreach (glob("functions/*.php") as $filename)
{
include $filename;
}

//$db = new Database();
$instance = Database::getInstance();
$db = $instance->con;

foreach (glob("classes/*") as $filename) {
    if($filename != "classes/Database.php"){
         $class_name = basename($filename,".php");
         $obj_name = strtolower($class_name);
         ${$obj_name} = new $class_name($db);
    }
   
 
}

//$database = new Database();



