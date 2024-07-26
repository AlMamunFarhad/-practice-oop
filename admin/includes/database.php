<?php require_once("config.php");


class Database {

      public $connection;


      public function __construct(){

      $this->db_connection();
      }

      public function db_connection(){

      // $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

      $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

      if ($this->connection->connect_errno) {

      die("Database Connection Failed." . $this->connection->connect_error);

      }
      }

      public function query($sql){

      // $result = mysqli_query($this->connection, $sql);
      $result = $this->connection->query($sql);
      $this->confirm_query($result);
      return $result;

      }

      private function confirm_query($confirm_result){

      if (!$confirm_result) {
         
      die("Query Failed." . $this->connection->error);

      }

      }
      public function escape($string){

      $escaped_string = $this->connection->real_escape_string($string);
      return $escaped_string;

      }

      public function the_insert_id() {
      return $this->connection->insert_id;
      }

}


      $database = new Database();



?>

