<?php 


class User {

public static function found_all_users(){

return self::find_this_query("SELECT * FROM users");

}

public static function find_by_id($id){
   
   return self::find_this_query("SELECT * FROM users WHERE id = {$id} LIMIT 1");
}


public static function find_this_query($sql)

{

global $database;

$result_set = $database->query($sql);
$found_data = mysqli_fetch_array($result_set);
return $found_data;


}


}



















 ?>