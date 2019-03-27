<?php
class Db_objects {

  private $_db;
  protected  static $_result;

    public function updatePassword()
  {
    $sql = "UPDATE ".static::$table;
    $sql.=" SET Password = '{$this->Password}'";
    $sql.=" WHERE Id = '{$this->Id}'";
    return DB::getInstance()->query($sql);
  }


  public function __construct() {
    $this->_db = DB::getInstance();
  }

    
  public function deleteAllLogs()
  {
    $sql = "DELETE FROM ".static::$table;
    return DB::getInstance()->query($sql);
  }

  public function teacherName()
  {
    return Teachers::find_by_id($this->TeacherId)->teacherName();
  }

   public function laboratory()
  {
    return laboratory($this->Lab);
  }


  public static function findBetweenDate($from,$to)
  {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE Date  between '$from' AND '$to'";
    return static::find_this_query($sql);
  }


     public static function find_by_array($column,$value)
   {
      $sql = "SELECT * FROM ".static::$table;
      $sql.=" WHERE ".$column." = '{$value}'";
      return static::find_this_query($sql);
   }

    public static function find_by($column,$value)
   {
      $sql = "SELECT * FROM ".static::$table;
      $sql.=" WHERE ".$column." = '{$value}'";
      $result =  static::find_this_query($sql);
     return !empty($result) ? array_shift($result) : FALSE;
   }


  // END OF GLOBAL FUNCTIONS
  public function result() {
    return self::$_result;
  }


  public function run_query() {
   $object_array = array();
   while ($row = mysqli_fetch_array(self::$_result)) {
    $object_array[] = static::instantiation($row);
  }
  return $object_array;
}


public function count_rows(){
  return mysqli_num_rows(self::$_result);
}

public function insert_id() {
  return mysqli_insert_id($this->_db->connection);
}


public static function find_all() {
  $result = static::find_this_query("select * from " . static::$table . " ");
  return $result;
}


public static function find_by_id($id){
  global $database;
  $sql = "SELECT * FROM " . static::$table;
  $sql .= " WHERE Id = '$id' ";
  $result = static::find_this_query($sql);
  return !empty($result) ? array_shift($result) : FALSE;
}


public static function find_this_query($sql){
  $query = DB::getInstance()->query($sql);
  $object_array = array();
  while ($row = mysqli_fetch_array($query)) {
    $object_array[] = static::instantiation($row);
  }
  return $object_array;
}


public static function instantiation($row){
  $call_class = get_called_class();
  $the_object = new $call_class;
  foreach ($row as $attributes => $value) {
    if ($the_object->has_the_attribute($attributes)) {
      $the_object->$attributes = $value;
    }
  }
  return $the_object;
}


private function has_the_attribute($attributes){
  $obj_properties = get_object_vars($this);
  return array_key_exists($attributes, $obj_properties);
}


protected function properties(){
  $properties = array();
  foreach (static::$fields as $field) {
    if (property_exists($this, $field)) {
      $properties[$field] = $this->$field;
    }
  }
  return $properties;
}



public function create(){
  $properties = $this->properties();
  $sql = "INSERT INTO " . static::$table . "(" . implode(",", array_keys($properties)) . ")";
  $sql .= "VALUES ('" . implode("','", array_values($properties)) . "')";
  if ($this->_db->query($sql)) {
      // $this->Id = $database->insert_id();
    return true;
  } else {
    mysqli_error($this->_db->connection);
    return false;
  }
}


public function update() {
  $properties = $this->properties();
  $properties_pair = array();
  foreach ($properties as $key => $value) {
    $properties_pair[] = "{$key} = '{$value}'";
  }
  $sql = "UPDATE " . static::$table . " SET ";
  $sql .= implode(",", $properties_pair);
  $sql .= " WHERE Id='" . DB::getInstance()->escape_string($this->Id) . "'";
  $result = DB::getInstance()->query($sql);
  return ($result) ? TRUE : FALSE;
}

public function save(){
  return isset($this->Id) ? $this->update() : $this->create();
}


public function delete(){
  $database = DB::getInstance();
  $sql = "DELETE FROM " . static::$table;
  $sql .= " WHERE Id='" . $database->escape_string($this->Id) . "'";
  $database->query($sql);
  return (mysqli_affected_rows($database->connection) == 1) ? TRUE : FALSE;
}
}

?>
