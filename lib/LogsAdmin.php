<?php
class LogsAdmin extends Db_objects {

  protected
  $Id,
  $Date,
  $Time,
  $Message;
  protected static $table = "logs_admin";
  protected static $fields = array(
    'Id',
    'Date',
    'Time',
    'Message',
  );



public function generate($message)
{
  $this->Date = dateToday();
  $this->Time = timeNow();
  $this->Message = $message;
}


public function getId()
{
  return $this->Id;
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


public function setId($value)
{
  return $this->Id = $value;
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

















} // end of class
