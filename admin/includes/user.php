<?php 


class User {

    protected static $db_table = "users";
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    

public static function found_all_users(){

    $found_all  = self::find_this_query("SELECT * FROM ".static::$db_table);
    return !empty($found_all) ? array_shift($found_all) : false;
    // return $found_all;
}

public static function find_by_id($id){
         
    $the_result_array = self::find_this_query("SELECT * FROM ".static::$db_table." WHERE id = {$id} LIMIT 1");
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



public static function verify_user($username, $password){

    global $database;
    $username = $database->escape($username);
    $password = $database->escape($password);

    $sql = "SELECT * FROM ".static::$db_table." WHERE ";
    $sql .= "username = '{$username}' ";
    $sql .= "AND password = '{$password}' ";
    $sql .= "LIMIT 1";

    $the_array_result = self::find_this_query($sql);
    return !empty($the_array_result) ? array_shift($the_array_result) : false;


}


public function save(){

    return isset($this->id) ? $this->update() : $this->create();

}


// Start create method
public function create() 
{
    global $database;
    $sql = "INSERT INTO ".static::$db_table." (username, password, first_name, last_name)";
    $sql .=" VALUES ('";
    $sql .= $database->escape($this->username) ."', '";
    $sql .= $database->escape($this->password) ."', '";
    $sql .= $database->escape($this->first_name) ."', '";
    $sql .= $database->escape($this->last_name) ."')";


  if ($database->query($sql)) {
      
   $this->id = $database->the_insert_id();

   return true;

  }else{

   return false;

  }


} // End create method

// Start update method
public function update(){ 

    global $database;

    $sql = "UPDATE ".static::$db_table." SET ";
    $sql .= "username = '".$database->escape($this->username) ."', ";
    $sql .= "password = '".$database->escape($this->password) ."', ";
    $sql .= "first_name = '".$database->escape($this->first_name) ."', ";
    $sql .= "last_name = '".$database->escape($this->last_name) ."' ";
    $sql .= " WHERE id = ".$database->escape($this->id);


    $database->query($sql);

    return (mysqli_affected_rows($database->connection) == 1) ? true : false;

} // End update method



public function delete(){

   global $database;
   $sql = "DELETE FROM ".static::$db_table." WHERE id =".$database->escape($this->id)." LIMIT 1";
   $database->query($sql);
   return (mysqli_affected_rows($database->connection) == 1) ? true : false;

}




}



















 ?>