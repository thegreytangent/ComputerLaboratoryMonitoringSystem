<?php
class LabUnits extends Db_objects {
  protected
  $Id,
  $UnitCode,
  $LabCode,
  $PeripheralsId,
  $SerialNumber;
  protected static $table = "lab_units";
  protected static $fields = array(
    'Id',
    'UnitCode',
    'LabCode',
    'PeripheralsId',
    'SerialNumber'
  );

  public static function hasRecord($unitCode)
  {
    return (!empty(self::find_by_array('UnitCode',$unitCode))) ? TRUE : FALSE;
  }

  public static function active($unitCode)
  {
    return (self::hasRecord($unitCode)) ? 'active' : '';
  }


  public static function find_by_UnitLab($unit,$lab)
  {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE LabCode = '{$lab}' ";
    $sql.=" AND UnitCode = '{$unit}'";
    return self::find_this_query($sql);
  }

  public static function active_lab1($unitCode)
  {
    return (self::find_by_UnitLab($unitCode,'lab1')) ? 'active' : '';
  }

   public static function active_lab2($unitCode)
  {
    return (self::find_by_UnitLab($unitCode,'lab2')) ? 'active' : '';
  }

  public static function active_lab3($unitCode)
 {
   return (self::find_by_UnitLab($unitCode,'lab3')) ? 'active' : '';
 }


 public static function active_lab4($unitCode)
 {
   return (self::find_by_UnitLab($unitCode,'lab4')) ? 'active' : '';
 }

  public static function active_lab5($unitCode)
 {
   return (self::find_by_UnitLab($unitCode,'lab5')) ? 'active' : '';
 }

 public static function active_lab6($unitCode)
 {
   return (self::find_by_UnitLab($unitCode,'lab6')) ? 'active' : '';
 }




  public function setId($value)
  {
    return $this->Id = $value;
  }


  public function setUnitCode($value)
  {
    return $this->UnitCode = $value;
  }


  public function setLabCode($value)
  {
    return $this->LabCode = $value;
  }


  public function setPeripheralsId($value)
  {
    return $this->PeripheralsId = $value;
  }


  public function setSerialNumber($value)
  {
    return $this->SerialNumber = $value;
  }

  public function getId()
  {
    return $this->Id;
  }


  public function getUnitCode()
  {
    return $this->UnitCode;
  }


  public function getLabCode()
  {
    return $this->LabCode;
  }


  public function getPeripheralsId()
  {
    return $this->PeripheralsId;
  }


  public function getSerialNumber()
  {
    return $this->SerialNumber;
  }













} // end of class
