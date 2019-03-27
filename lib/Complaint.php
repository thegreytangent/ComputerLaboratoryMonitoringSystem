<?php
class Complaint extends Db_objects {

  protected 
  $Id,
  $Lab,
  $PCNum,
  $Parts,
  $TeacherId,
  $Concerns,
  $Date,
  $Status;


  protected static $table = "complaint";

  protected static $fields = array(
    'Id',
    'Lab',
    'PCNum',
    'Parts',
    'TeacherId',
    'Concerns',
    'Date',
    'Status'
  );

  public function complaintName()
  {
    $teacher = Teachers::find_by_id($this->TeacherId);
    return $teacher->teacherName();
  }


  public static function findbyLabStatus($lab,$status) {
    $sql = " SELECT * FROM ".static::$table;
    $sql.=" WHERE Lab = '{$lab}'";
    $sql.=" AND Status = '{$status}'";
    return static::find_this_query($sql);
  }

  
  public static function countUnseen($lab) {
    return count(self::findbyLabStatus($lab,0));
  }



  public function updateStatus()
  {
    $sql = "UPDATE ".static::$table;
    $sql.=" SET Status = {$this->Status}";
    $sql.=" WHERE Id = '{$this->Id}'";
    return Db::getInstance()->query($sql);
  }



  public function getId()
  {
    return $this->Id;
  }
  public function getLab()
  {
    return $this->Lab;
  }
  public function getPCNum()
  {
    return $this->PCNum;
  }
  public function getParts()
  {
    return $this->Parts;
  }
  public function getTeacherId()
  {
    return $this->TeacherId;
  }
  public function getConcerns()
  {
    return $this->Concerns;
  }
  public function getDate()
  {
    return $this->Date;
  }


  public function setStatus($value)
  {
    return $this->Status = $value;
  }


  public function setId($value)
  {
    return $this->Id = $value;
  }
  public function setLab($value)
  {
    return $this->Lab = $value;
  }
  public function setPCNum($value)
  {
    return $this->PCNum = $value;
  }
  public function setParts($value)
  {
    return $this->Parts = $value;
  }
  public function setTeacherId($value)
  {
    return $this->TeacherId = $value;
  }
  public function setConcerns($value)
  {
    return $this->Concerns = $value;
  }
  public function setDate($value)
  {
    return $this->Date = $value;
  }














}
