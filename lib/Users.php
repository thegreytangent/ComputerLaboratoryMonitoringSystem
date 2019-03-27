<?php

class Users extends Db_objects {

  protected $Id, $Username,$Password,$Position;
  protected static $table = "users";
  protected static $fields = array('Id', 'Username','Password','Position');


  public function login() {
    $result = $this->findUsernamePassword($this->Username,$this->Password);
    return !empty($result) ? array_shift($result) : FALSE;
  }





  private static function findUsernamePassword($username,$password) {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE Username = '{$username}'";
    $sql.=" AND Password = '{$password}'";
    return static::find_this_query($sql);
  }

  public function update_username() {
    $sql = "UPDATE ".static::$table;
    $sql.=" SET Username='{$this->Username}'";
    $sql.=" WHERE Id ='{$this->Id}'";
    return DB::getInstance()->query($sql);
  }


  public static function findUsernamePasswordPosition($username,$password,$position) {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE Username = '{$username}'";
    $sql.=" AND Password = '{$password}'";
    $sql.=" AND Position = '{$position}'";
    $result = static::find_this_query($sql);
    return !empty($result) ? array_shift($result) : FALSE;
  }

  public function setPosition($value)
  {
    return $this->Position = $value;
  }

  public function setId($value) {
    return $this->Id = $value;
  }

  public function setUsername($value) {
    return $this->Username = $value;
  }

  public function setPassword($value) {
    return $this->Password = md5($value);
  }

  public function getId() {
    return $this->Id;
  }

  public function getUsername() {
    return $this->Username;
  }

  public function getPassword() {
    return $this->Password;
  }













}
