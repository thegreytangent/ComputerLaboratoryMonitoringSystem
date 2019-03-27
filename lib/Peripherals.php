<?php
class Peripherals extends Db_objects {

  protected 
  $Id,
  $PartsName,
  $Brand;

  protected static $table = "peripherals";

  protected static $fields = array(
   'Id',
   'PartsName',
   'Brand'
 );

public static function selectAllGroupByPartsName()
{  
  $sql = "SELECT * FROM ".static::$table;
  $sql.=" GROUP BY PartsName";
  return static::find_this_query($sql);
}


public function updateBrand()
{
  $sql = "UPDATE ".static::$table;
  $sql.=" SET Brand = '{$this->Brand}'";
  $sql.=" WHERE Id='{$this->Id}' ";
  return DB::getInstance()->query($sql);
}




































  public function setId($value)
  {
   return $this->Id = $value;
 }


 public function getId()
 {
  return $this->Id;
}

public function setPartsName($value)
{
  return $this->PartsName = $value;
}


public function getPartsName()
{
  return $this->PartsName;
}

public function setBrand($value)
{
 return $this->Brand = $value;
}


public function getBrand()
{
  return $this->Brand;
}




public static function listParts()
{
  return array(
    'Keyboard','Mouse','Monitor','AVR','RAM','Hardrive'
  );
}





}