<?php
class Resources extends Db_objects {

  protected 
  $Id,
  $ResourcesName,
  $Count;


  protected static $table = "resources";

  protected static $fields = array(
    'Id',
    'ResourcesName',
    'Count'
  );


  public function save()
  {
    return (empty($this->Id)) ? $this->create() : $this->update();
  }
  public function getId()
  {
    return $this->Id;
  }
  public function getResourcesName()
  {
    return $this->ResourcesName;
  }
  public function getCount()
  {
    return $this->Count;
  }

  public function setId($value)
  {
    return $this->Id = $value;
  }
  public function setResourcesName($value)
  {
    return $this->ResourcesName = $value;
  }
  public function setCount($value)
  {
    return $this->Count = $value;
  }



}
