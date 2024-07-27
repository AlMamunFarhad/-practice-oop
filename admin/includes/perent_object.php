<?php 

class Parent_object{

    
	public static function find_all(){

	     return static::find_this_query("SELECT * FROM ".static::$db_table);
	    // return !empty($found_all) ? array_shift($found_all) : false;
	}

    public static function find_by_id($id){
         
    $the_result_array = static::find_this_query("SELECT * FROM ".static::$db_table." WHERE id = {$id} LIMIT 1");
    return !empty($the_result_array) ? array_shift($the_result_array) : false;
   }


   public static function find_this_query($sql)
{
    global $database;
    $result_set = $database->query($sql);
    $the_object_array = array();

    while($row = mysqli_fetch_array($result_set)){

     $the_object_array[] = static::instantation($row);
    }
    return $the_object_array;
} 

public static function instantation($the_record){

    $the_object = new static;

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


public function save(){

    return isset($this->id) ? $this->update() : $this->create();

}


protected function properties(){
   // return get_object_vars($this);
    $properties = array();

    foreach (static::$db_table_fields as $db_field) {

    if (property_exists($this, $db_field)) {
        $properties[$db_field] = $this->$db_field;
    }
}

   return $properties;
}


protected function clean_properties(){
  global $database;

  $clear_properties = array();

  foreach ($this->properties() as $key => $value) {
      
      $clear_properties[$key] = $database->escape($value);
  }
 
 return $clear_properties;

}

// Start create method
public function create() 
{
    $properties = $this->clean_properties();

    global $database;
    $sql = "INSERT INTO ".static::$db_table."(".implode(",", array_keys($properties)).")";
    $sql .=" VALUES ('".implode("','", array_values($properties))."')";
    // $sql .= $database->escape($this->username) ."', '";
    // $sql .= $database->escape($this->password) ."', '";
    // $sql .= $database->escape($this->first_name) ."', '";
    // $sql .= $database->escape($this->last_name) ."')";


  if ($database->query($sql)) {
      
   $this->id = $database->the_insert_id();

   return true;

  }else{

   return false;

  }


} // End create method

// Start update method
public function update(){ 

    $properties = $this->clean_properties();
    
    $properties_pairs = array();

    foreach ($properties as $key => $value) {
        
        $properties_pairs[] = "{$key}='{$value}'";

    }

    global $database;

    $sql = "UPDATE ".static::$db_table." SET ";
    $sql .= implode(",", $properties_pairs);
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