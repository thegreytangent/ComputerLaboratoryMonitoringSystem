<?php
class Schedules extends Db_objects {
  protected
  $Id,
  $StudentAssisId,
  $Time,
  $Day,
  $TM;

  protected static $table = "schedules";

  protected static $fields = array(
    'Id',
    'StudentAssisId',
    'Time',
    'Day',
    'TM'
  );


  public function find_schedules($student,$time,$day,$tm)
  {
    $sql = " SELECT * FROM ".static::$table;
    $sql.=" WHERE StudentAssisId = '{$student}'";
    $sql.=" AND Time ='{$time}'";
    $sql.=" AND Day = '{$day}'";
    $sql.=" AND TM = '{$tm}'";
    return static::find_this_query($sql);
  }

  public function find_schedules_delete($student,$time,$day,$tm)
  {
    $sql = " DELETE FROM ".static::$table;
    $sql.=" WHERE StudentAssisId = '{$student}'";
    $sql.=" AND Time ='{$time}'";
    $sql.=" AND Day = '{$day}'";
    $sql.=" AND TM = '{$tm}'";
    return DB::getInstance()->query($sql);
  }

  public function class($student,$time,$day,$tm)
  {
    return (empty(self::find_schedules($student,$time,$day,$tm))) ? 'btn-outline-danger' : 'btn-success';
  }

  public function classText($student,$time,$day,$tm)
  {
    return (empty(self::find_schedules($student,$time,$day,$tm))) ? 'Unavailable' : 'Available';
  }


  public function getId()
  {
    return $this->Id;
  }
  public function getStudentAssisId()
  {
    return $this->StudentAssisId;
  }
  public function getTime()
  {
    return $this->Time;
  }
  public function getDay()
  {
    return $this->Day;
  }
  public function getTM()
  {
    return $this->TM;
  }

  public function setId($value)
  {
    return $this->Id = $value;
  }
  public function setStudentAssisId($value)
  {
    return $this->StudentAssisId = $value;
  }
  public function setTime($value)
  {
    return $this->Time = $value;
  }
  public function setDay($value)
  {
    return $this->Day = $value;
  }
  public function setTM($value)
  {
    return $this->TM = $value;
  }







} // end of class
