<?php 

require_once "includes/init.php";


$my_stuff = $stuff->get_stuff();
foreach($my_stuff as $each){
    var_dump($each->id);
}

?>
