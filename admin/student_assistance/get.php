<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$student = StudentAssistance::find_by_id(Input::get('id'));
$comlabList = array();
$semList    = array();
$daysArray  = array();

foreach (laboratoryList() as $list ) {
  if ($student->getAssignLab() !== $list ) {
    $comlabList[$list] = laboratory($list) ;
  }
}

foreach (semesterList() as $key => $value ) {
  if ($student->getSemester() !== $key ) {
    $semList[$key] = semesters($key) ;
  }
}

foreach (daysArray() as $key ) {
  if ($student->getMaintenanceSchedule() !== $key ) {
    $daysArray[] = $key;
  }
}





echo json_encode(array(
  'id' => $student->getId(),
  'comLabList' => $comlabList,
  'semList' => $semList,
  'sheduleList' => $daysArray,
  'firstname' => $student->getFirstname(),
  'lastname' => $student->getLastname(),
  'assignLab' => array(
    $student->getAssignLab() => laboratory($student->getAssignLab())
  ),
  'yearStarted' => $student->getYearStarted(),
  'yearEnded' => $student->getYearEnded(),
  'semester' => array($student->getSemester() =>semesters($student->getSemester())),
  'maintenanceSched' => $student->getMaintenanceSchedule(),
  'idNumber' => $student->getIdNumber(),

));
