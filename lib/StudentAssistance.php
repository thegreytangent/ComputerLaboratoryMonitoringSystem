<?php
class StudentAssistance extends Db_objects {

  protected
  $Id,
  $Firstname,
  $Lastname,
  $AssignLab,
  $YearStarted,
  $YearEnded,
  $Semester,
  $MaintenanceSchedule,
  $IdNumber,
  $Password;

  protected static $table = "student_assistance";
  protected static $fields = array(
   'Id',
   'Firstname',
   'Lastname',
   'AssignLab',
   'YearStarted',
   'YearEnded',
   'Semester',
   'MaintenanceSchedule',
   'IdNumber',
   'Password'
 );







  public function averageRating()
  {
    $totalRating = count($this->computeAverageRating());
    $rating = array_sum(($this->computeAverageRating()));
    return ($totalRating == 0 ) ? 0 : $rating / $totalRating;
  }

  public function computeAverageRating()
  {
    $array = array();
  
      foreach (RequestAssistanceReply::find_by_array('StudentAssistanceId',$this->Id) as $reply ) {
          if (RequestAssistanceRate::find_by('RequestReplyId',$reply->getId())) {
      $array[] = RequestAssistanceRate::find_by('RequestReplyId',$reply->getId())->getRate();
    }
    }
    
    return $array;
  }



  public static function findByIdNumberPassword($idNumber,$password)
  {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE IdNumber = '{$idNumber}' ";
    $sql.=" AND Password  = '{$password}'";
    $result =  static::find_this_query($sql);
     return !empty($result) ? array_shift($result) : FALSE;
  }


  public function setIdNumber($value)
  {
    return $this->IdNumber = $value;
  }

  public function setPassword($value)
  {
    return $this->Password = $value;
  }

public function completeName()
{
  return $this->Lastname.", ".$this->Firstname;
}

public function assignToLab($lab)
{
  $get = self::find_by('AssignLab',$lab);
  return ($get) ? $get->completeName() : "No Assign";
}


public function assignToLabDay($lab)
{
  $get = self::find_by('AssignLab',$lab);
  return ($get) ? $get->MaintenanceSchedule : "No Assign";
}


public function semester()
{
  return $this->Semester .' Semester';
}

  public function save()
  {
    return (!$this->Id) ? $this->create() : $this->update();
  }

  public function schoolYear(){
    return $this->YearStarted." - ".$this->YearEnded;
  }

  public function getId(){
    return $this->Id;
  }
  public function getFirstname(){
    return $this->Firstname;
  }
  public function getLastname(){
    return $this->Lastname;
  }
  public function getAssignLab(){
    return $this->AssignLab;
  }
  public function getYearStarted(){
    return $this->YearStarted;
  }
  public function getYearEnded(){
    return $this->YearEnded;
  }
  public function getSemester(){
    return $this->Semester;
  }
  public function getMaintenanceSchedule(){
    return $this->MaintenanceSchedule;
  }

  public function setId($value){
    return $this->Id = $value;
  }

  public function setFirstname($value){
    return $this->Firstname = $value;
  }

  public function setLastname($value){
    return $this->Lastname = $value;
  }

  public function setAssignLab($value){
    return $this->AssignLab = $value;
  }

  public function setYearStarted($value){
    return $this->YearStarted = $value;
  }

  public function setYearEnded($value){
    return $this->YearEnded = $value;
  }

  public function setSemester($value){
    return $this->Semester = $value;
  }

  public function setMaintenanceSchedule($value){
    return $this->MaintenanceSchedule = $value;
  }

  public function getIdNumber()
  {
    return $this->IdNumber;
  }


  public function getPassword()
  {
    return $this->Password;
  }




}
