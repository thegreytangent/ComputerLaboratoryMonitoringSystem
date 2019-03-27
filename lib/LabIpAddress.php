<?php
class LabIpAddress extends Db_objects {
  protected
  $Id,
  $Lab,
  $Unit,
  $IpAddress;
  protected static $table = "lab_ipaddress";
  protected static $fields = array(
    'Id',
    'Lab',
    'Unit',
    'IpAddress');


    public static function findByLabUnit($lab,$unit){
      $sql = "SELECT * FROM ".static::$table;
      $sql.=" WHERE Lab = '{$lab}'";
      $sql.= " AND Unit = '{$unit}'";
      $result =  static::find_this_query($sql);
      return !empty($result) ? array_shift($result) : FALSE;
    }



    public function getId()
    {
      return $this->Id;

    }

    public function getLab()
    {
      return $this->Lab;
    }

    public function getUnit()
    {
      return $this->Unit;
    }

    public function getIpAddress()
    {
      return $this->IpAddress;
    }

    public function setId($values)
    {
      return $this->Id = $values;
    }


    public function setUnit($values)
    {
      return $this->Unit = $values;
    }

    public function setLab($values)
    {
      return $this->Lab = $values;
    }


    public function setIpAddress($values)
    {
      return $this->IpAddress = $values;
    }











  } // end of class
