<?php
class RequestAssistanceRate extends Db_objects {
  protected
  $Id,
  $RequestReplyId,
  $Lab,
  $Rate,
  $SAId;
  protected static $table = "request_assistance_rate";
  protected static $fields = array(
    'Id',
    'RequestReplyId',
    'Lab',
    'Rate',
    'SAId'
  );

  public function getId()
  {
    return $this->Id;
  }
  public function getRequestReplyId()
  {
    return $this->RequestReplyId;
  }
  public function getLab()
  {
    return $this->Lab;
  }
  public function getRate()
  {
    return $this->Rate;
  }
  public function getSAId()
  {
    return $this->SAId;
  }





  public function setId($value)
  {
    return $this->Id = $value;
  }
  public function setRequestReplyId($value)
  {
    return $this->RequestReplyId = $value;
  }
  public function setLab($value)
  {
    return $this->Lab = $value;
  }
  public function setRate($value)
  {
    return $this->Rate = $value;
  }
  public function setSAId($value)
  {
    return $this->SAId = $value;
  }




}
