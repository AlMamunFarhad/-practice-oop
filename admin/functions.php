<?php 




function my_autoload($class){


   $class = strtolower($class);


   $the_path = "includes/{$class}.php";

   if (file_exists($the_path)) {
   	

    require_once($the_path);


   }else{

    die("This file name {$the_path} was not found.");

   }


}

spl_autoload_register('my_autoload');


function redirect($location){
   header("Location: {$location}");
}




 ?>