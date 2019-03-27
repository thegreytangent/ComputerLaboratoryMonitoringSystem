<?php
class Teachers extends Db_objects {
  protected
  $Id,
  $Firstname,
  $Lastname,
  $Authorization,
  $Password,
  $Department,
  $YearStarted,
  $YearEnded,
  $Semester;
  protected static $table = "teachers";
  protected static $fields = array(
    'Id',
    'Firstname',
    'Lastname',
    'Authorization',
    'Password',
    'Department',
    'YearStarted',
    'YearEnded',
    'Semester'
  );

  public static function DepartmentList()
  {
    return array(
      'CICT',
      'HRM',
      'ArtSciences',
      'Criminology',
      'Education',
      'Engineering'
    );
  }

public function changePassword()
{
  
}
public function updatePassword()
{
  $sql = "UPDATE ".static::$table;
  $sql.=" SET Password = '{$this->Password}'";
  $sql.=" WHERE Id = '{$this->Id}'";
  return DB::getInstance()->query($sql);
}

  public static function semesterList()
  {
    return array(
      '1st' => '1st Semester',
      '2nd' => '2nd Semester',
      'summer' => 'Summer'
    );
  }

  public function teacherName()
  {
    return $this->Lastname .", ". $this->Firstname;
  }

  public function semester()
  {
    switch ($this->Semester) {
      case '1st':
      return 'First Semester';
      break;
      case '2nd':
      return 'Second Semester';
      break;

      default:
      return 'Summer';
      break;
    }
  }

  public function schoolYear()
  {
    return $this->YearStarted ." - ". $this->YearEnded;
  }

  public function save()
  {
    return ($this->Id) ? $this->update() : $this->create();
  }



  public static function findByAuthoPassword($autho,$password)
  {
    $sql = "SELECT * FROM ".static::$table;
    $sql.=" WHERE Authorization = '{$autho}' ";
    $sql.=" AND Password = '{$password}'";
    $result =  static::find_this_query($sql);
    return !empty($result) ? array_shift($result) : FALSE;

  }


















  public function getId() {
    return $this->Id;
  }
  public function getFirstname() {
    return $this->Firstname;
  }
  public function getLastname() {
    return $this->Lastname;
  }
  public function getAuthorization() {
    return $this->Authorization;
  }
  public function getPassword() {
    return $this->Password;
  }
  public function getDepartment() {
    return $this->Department;
  }
  public function getYearStarted() {
    return $this->YearStarted;
  }
  public function getYearEnded() {
    return $this->YearEnded;
  }
  public function getSemester() {
    return $this->Semester;
  }
  public function setId($value)
  {
    return $this->Id = $value;
  }
  public function setFirstname($value)
  {
    return $this->Firstname = $value;
  }
  public function setLastname($value)
  {
    return $this->Lastname = $value;
  }
  public function setAuthorization($value)
  {
    return $this->Authorization = $value;
  }
  public function setPassword($value)
  {
    return $this->Password = $value;
  }
  public function setDepartment($value)
  {
    return $this->Department = $value;
  }
  public function setYearStarted($value)
  {
    return $this->YearStarted = $value;
  }
  public function setYearEnded($value)
  {
    return $this->YearEnded = $value;
  }
  public function setSemester($value)
  {
    return $this->Semester = $value;
  }
  } // end of class
