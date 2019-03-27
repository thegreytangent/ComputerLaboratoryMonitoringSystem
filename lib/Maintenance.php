<?php
class Maintenance extends Db_objects {
  protected
  $Id,
  $StudentAssisId,
  $Lab,
  $Units,
  $Issue,
  $IssueDeviceName,
  $IssueDeviceSerial,
  $ActionTaken,
  $PeripheralsId,
  $PeripherlasSerial,
  $Date,
  $Remarks;


  protected static $table = "maintenance";
  protected static $fields = array(
    'Id',
    'StudentAssisId',
    'Lab',
    'Units',
    'Issue',
    'IssueDeviceName',
    'IssueDeviceSerial',
    'ActionTaken',
    'PeripheralsId',
    'PeripherlasSerial',
    'Date',
    'Remarks'
  );

public function save(){
  return (!empty($this->Id)) ? $this->update() : $this->create();
}

public function issue() {
  $issue =  "";
  foreach (issues() as $key => $value) {
   
    if ($key == $this->Issue) {
      $issue =  $value;
      break;
    }
  }
  return $issue;
}




public function setDate($value)
{
  return $this->Date = $value;
}

public function setRemarks($value)
{
  return $this->Remarks = $value;
}

public function getDate(){
    return $this->Date;
  }

  public function getId(){
    return $this->Id;
  }
  public function getStudentAssisId(){
    return $this->StudentAssisId;
  }
  public function getLab(){
    return $this->Lab;
  }
  public function getUnits(){
    return $this->Units;
  }
  public function getIssue(){
    return $this->Issue;
  }
  public function getIssueDeviceName(){
    return $this->IssueDeviceName;
  }
  public function getIssueDeviceSerial(){
    return $this->IssueDeviceSerial;
  }
  public function getActionTaken(){
    return $this->ActionTaken;
  }
  public function getPeripheralsId(){
    return $this->PeripheralsId;
  }
  public function getPeripherlasSerial(){
    return $this->PeripherlasSerial;
  }

  public function setId($value){
    return $this->Id = $value;
  }
  public function setStudentAssisId($value){
    return $this->StudentAssisId = $value;
  }
  public function setLab($value){
    return $this->Lab = $value;
  }
  public function setUnits($value){
    return $this->Units = $value;
  }
  public function setIssue($value){
    return $this->Issue = $value;
  }
  public function setIssueDeviceName($value){
    return $this->IssueDeviceName = $value;
  }
  public function setIssueDeviceSerial($value){
    return $this->IssueDeviceSerial = $value;
  }
  public function setActionTaken($value){
    return $this->ActionTaken = $value;
  }
  public function setPeripheralsId($value){
    return $this->PeripheralsId = $value;
  }
  public function setPeripherlasSerial($value){
    return $this->PeripherlasSerial = $value;
  }











} // end of class
