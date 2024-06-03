<?php 


class User {


       public $id;
       public $username;
       public $password;
       public $first_name;
       public $last_name;


public static function found_all_users(){

      
     $found_all  = self::find_this_query("SELECT * FROM users");
     return !empty($found_all) ? array_shift($found_all) : false;

}

public static function find_by_id($id){
         
      $the_result_array = self::find_this_query("SELECT * FROM users WHERE id = {$id} LIMIT 1");
      return !empty($the_result_array) ? array_shift($the_result_array) : false;
}

public static function find_this_query($sql)
{
      global $database;
      $result_set = $database->query($sql);
      $the_object_array = array();

      while($row = mysqli_fetch_array($result_set)){
        
         $the_object_array[] = self::instantation($row);
      }
      
      return $the_object_array;
} 

public static function instantation($the_record){

      $the_object = new self;

      foreach ($the_record as $the_attributes => $value) {
        
        if($the_object->has_the_attribute($the_attributes)){

          $the_object->$the_attributes = $value;

        }

     }                

    return $the_object;
}


private function has_the_attribute($the_attributes){

     $object_properties = get_object_vars($this);
     return array_key_exists($the_attributes, $object_properties);
}















}



















 ?>