<?php
 //gets it connection values from defines.php which is required_once in init.php

   try{ $connection = new PDO('mysql:host='.HOST.';dbname='.DATABASE_NAME.';', DATABASE_USER, DATABASE_PASSWORD);
            
      }catch (PDOException $e) {
           Errors::catch_errors($e);
         die("no connect");
   
}