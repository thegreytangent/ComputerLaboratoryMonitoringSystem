<?php
class RequestAssistanceReply extends Db_objects {
  protected
  $Id,
  $RequestId,
  $Message,
  $StudentAssistanceId,
  $Lab,
  $Seen;
  protected static $table = "request_assistance_reply";
  protected static $fields = array(
    'Id',
    'RequestId',
    'Message',
    'StudentAssistanceId',
    'Lab',
    'Seen'
  );

  public function rating()
  {
    $get = RequestAssistanceRate::find_by('RequestReplyId',$this->Id);
   if ($this->checkRatingExist()) {
    $rating = $get->getRate();
   } else {
    $rating = 'Pending';
   }
   return $rating;
  }

  public function checkRatingExist()
  {
    return (RequestAssistanceRate::find_by('RequestReplyId',$this->Id)) ? true : false; 
  }

  public function SAName()
  {
    return StudentAssistance::find_by_id($this->StudentAssistanceId)->completeName();
  }

  public function setSeen($value)
  {
    return $this->Seen = $value;
  }

  public function updateSeenToSeen($lab)
  {
    $sql = " UPDATE ".static::$table;
    $sql.=" SET Seen = '1'";
    $sql.=" WHERE Lab ='{$lab}' ";
    return DB::getInstance()->query($sql);
  }


  public static function countUnSeenNotif($lab)
  {
    return count(self::findbyLabSeen($lab,0));
  }

  public static function findbyRequestSeen($request,$seen)
  {
    $sql =  " SELECT * FROM ".static::$table;
    $sql.= " WHERE RequestId = '{$request}' ";
    $sql.=" AND Seen =  '{$seen}'";
    return static::find_this_query($sql);
  }

  public static function findbyLabSeen($lab,$seen)
  {
    $sql =  " SELECT * FROM ".static::$table;
    $sql.= " WHERE Lab = '{$lab}' ";
    $sql.=" AND Seen =  '{$seen}'";
    return static::find_this_query($sql);
  }





  public function getId()
  {
    return $this->Id;
  }

  public function getLab()
  {
    return $this->Lab;
  }
  public function getRequestId()
  {
    return $this->RequestId;
  }
  public function getMessage()
  {
    return $this->Message;
  }
  public function getStudentAssistanceId()
  {
    return $this->StudentAssistanceId;
  }
  public function setId($value)
  {
    return $this->Id = $value;
  }
  public function setRequestId($value)
  {
    return $this->RequestId = $value;
  }
  public function setMessage($value)
  {
    return $this->Message = $value;
  }
  public function setLab($value)
  {
    return $this->Lab = $value;
  }


  public function setStudentAssistanceId($value)
  {
    return $this->StudentAssistanceId = $value;
  }
}
