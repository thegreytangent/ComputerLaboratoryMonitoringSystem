<?php
class DB {

  public $connection;
  public $crumbs;
  private static $_instance;

  public function __construct(){
    $this->open_connection();
  }

  public static function getInstance() {
    if (!isset(self::$_instance)) {
      self::$_instance = new DB();
    }
    return self::$_instance;
  }


  public function open_connection() {
    $this->connection = new mysqli(''.Config::get('mysql/host').'',''.Config::get('mysql/username').'','',''.Config::get('mysql/db').'');
    if ($this->connection->errno){
      die("Database error");
    }
  }

    public function query($sql){
    $result = mysqli_query($this->connection,$sql);
    if (!$result) {
      echo "Error in query " . $sql . $this->connection->error;
    }
    return $result;
  }


  public function escape_string($string) {
    return mysqli_escape_string($this->connection,$string);
  }

  public  function lastInsertId() {
    return $this->connection->insert_id;
  }

  public function save() {
    if (!$this->Id) {
        $result =  $this->update();
    }else {
        $result = $this->create();
    }
    return $result;
  }
  

}






?>
