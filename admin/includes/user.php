<?php 


class User extends Parent_object{

    protected static $db_table = "users";
    protected static $db_table_fields = array("username","password","first_name","last_name");
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    

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


}



















 ?>