<?php
class ResourcesRequest extends Db_objects {

  protected 
  $Id,
  $Lab,
  $TeacherId,
  $Peripherals,
  $Note,
  $Status,
  $Date;


  protected static $table = "resources_request";

  protected static $fields = array(
    'Id',
    'Lab',
    'TeacherId',
    'Peripherals',
    'Note',
    'Status',
    'Date'
  );


  

  public function setDate($value)
  {
    return $this->Date = $value;
  }

  public function getDate()
  {
    return $this->Date;
  }
  
  public static function selectLabStatus($lab,$status)
  {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE Lab = '{$lab}' ";
    $sql.=" AND Status = '{$status}'";
    $result = static::find_this_query($sql);
    return !empty($result) ? array_shift($result) : FALSE;
  }

  public function updateStatus($status)
  {
    $sql =  "UPDATE ".static::$table;
    $sql.=" SET Status =  '{$status}'";
    $sql.=" WHERE Id = '{$this->Id}' ";
    return DB::getInstance()->query($sql);
  }

  public function getId()
  {
    return $this->Id;
  }

  public function getLab()
  {
    return $this->Lab;
  }

  public function getTeacherId()
  {
    return $this->TeacherId;
  }

  public function getPeripherals()
  {
    return $this->Peripherals;
  }

  public function getNote()
  {
    return $this->Note;
  }


  public function setId($value)
  {
    return $this->Id = $value;
  }
  public function setLab($value)
  {
    return $this->Lab = $value;
  }
  public function setTeacherId($value)
  {
    return $this->TeacherId = $value;
  }
  public function setPeripherals($value)
  {
    return $this->Peripherals = $value;
  }
  public function setNote($value)
  {
    return $this->Note = $value;
  }

  public function setStatus($value)
  {
    return $this->Status = $value;
  }






}
