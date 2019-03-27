<?php
class LabStatus extends Db_objects {
  protected
  $Id,
  $TeacherId,
  $Lab,
  $status;

  protected static $table = "Lab_status";
  protected static $fields = array(
    'Id',
    'TeacherId',
    'Lab',
    'status'
  );

  public function youLoginOtherComputer()
  {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE TeacherId = '{$this->TeacherId}'";
    return static::find_this_query($sql);
  }

  public function teacher_online()
  {
    return Teachers::find_by_id($this->TeacherId)->teacherName();
  }


  public function findByLab()
  {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE Lab = '{$this->Lab}'";
    return static::find_this_query($sql);
  }


  public function beingUse()
  {
    return ($this->findByLab()) ? true :false;
  }


  public function LogoutLaboratory()
  {
    $sql = "DELETE FROM ".static::$table;
    $sql.=" WHERE TeacherId = '{$this->TeacherId}'";
    return DB::getInstance()->query($sql);
  }


  public function getId()
  {
    return $this->Id;
  }



  public static function check_active($Lab)
  {
    return (self::find_by_array('Lab',$Lab)) ? 'bg-success' : 'bg-secondary';
  }

  public static function status_name($Lab)
  {
    return (self::find_by_array('Lab',$Lab)) ? 'Online' : 'Offline';
  }

  public function getTeacherId()
  {
    return $this->TeacherId;
  }

  public function getLab(){
    return $this->Lab;
  }

  public function getstatus(){
    return $this->status;
  }

  public function setId($value)
  {
    return $this->Id = $value;
  }

  public function setTeacherId($value)
  {
    return $this->TeacherId = $value;
  }

  public function setLab($value)
  {
    return $this->Lab = $value;
  }

  public function setstatus($value)
  {
    return $this->status = $value;
  }















} // end of class
