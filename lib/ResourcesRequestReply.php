<?php
class ResourcesRequestReply extends Db_objects {
  protected
  $Id,
  $ResourcesRequestId,
  $Message,
  $Status,
  $StudentAssistanceId;
  protected static $table = "resources_request_reply";
  protected static $fields = array(
    'Id',
    'ResourcesRequestId',
    'Message',
    'Status',
    'StudentAssistanceId'
  );

  public static function countUnseen($lab)
  {
    $requestAssistance = ResourcesRequest::selectLabStatus($lab,1);
    if ($requestAssistance) {
      $count = count(self::findbyLabStatus($requestAssistance->getId(),0));
    } else {
      $count = 0;
    }
    return $count;

  }


  public static function findbyLabStatus($id,$status)
  {
    $sql =  " SELECT * FROM ".static::$table;
    $sql.= " WHERE ResourcesRequestId = '{$id}' ";
    $sql.=" AND Status = '{$status}'";
    return static::find_this_query($sql);
  }


  public function updateStatus($status)
  {
    $sql =  "UPDATE ".static::$table;
    $sql.=" SET Status =  '{$status}'";
    $sql.=" WHERE Id = '{$this->Id}' ";
    return DB::getInstance()->query($sql);
  }











  public function getId(){
    return $this->Id;
  }
  public function getResourcesRequestId(){
    return $this->ResourcesRequestId;
  }
  public function getMessage(){
    return $this->Message;
  }
  public function getStatus(){
    return $this->Status;
  }
  public function getStudentAssistanceId(){
    return $this->StudentAssistanceId;
  }
  public function setId($value){
    return $this->Id = $value;
  }
  public function setResourcesRequestId($value){
    return $this->ResourcesRequestId = $value;
  }
  public function setMessage($value){
    return $this->Message = $value;
  }
  public function setStatus($value){
    return $this->Status = $value;
  }
  public function setStudentAssistanceId($value){
    return $this->StudentAssistanceId = $value;
  }
}
