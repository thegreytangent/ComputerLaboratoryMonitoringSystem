<?php
class Logs extends Db_objects {
  protected
  $Id,
  $TeacherId,
  $Date,
  $Time,
  $Message,
  $Lab;
  protected static $table = "logs";
  protected static $fields = array(
    'Id',
    'TeacherId',
    'Date',
    'Time',
    'Message',
    'Lab'
  );



  public static function getMax15($teacher,$lab) {
    $sql = " SELECT * FROM ".static::$table;
    $sql.=" WHERE TeacherId = '{$teacher}'";
    $sql.=" AND Lab = '{$lab}'";
    $sql.=" ORDER BY Id DESC";
    $sql.=" LIMIT 15";
    return static::find_this_query($sql);
  }

  public function deleteLogs()
  {
    $sql = "DELETE FROM ".static::$table;
    $sql.=" WHERE TeacherId = '{$this->TeacherId}'";
    $sql.=" AND Lab = '{$this->Lab}'";
    return DB::getInstance()->query($sql);
  }

public function generate($lab,$message)
{
  $this->TeacherId = Session::get('teachers');
  $this->Date = dateToday();
  $this->Time = timeNow();
  $this->Message = $message;
  $this->Lab = $lab;
  $this->create();
}






public function getId()
{
  return $this->Id;
}
public function getTeacherId()
{
  return $this->TeacherId;
}
public function getDate()
{
  return $this->Date;
}
public function getTime()
{
  return $this->Time;
}
public function getMessage()
{
  return $this->Message;
}
public function getLab()
{
  return $this->Lab;
}

public function setId($value)
{
  return $this->Id = $value;
}
public function setTeacherId($value)
{
  return $this->TeacherId = $value;
}
public function setDate($value)
{
  return $this->Date = $value;
}
public function setTime($value)
{
  return $this->Time = $value;
}
public function setMessage($value)
{
  return $this->Message = $value;
}
public function setLab($value)
{
  return $this->Lab = $value;
}


















} // end of class
