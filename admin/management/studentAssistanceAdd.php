<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php




$studentAssistant = new StudentAssistance();
$studentAssistant->setId(Input::get('id'));
$studentAssistant->setFirstname(Input::get('firstname'));
$studentAssistant->setLastname(Input::get('lastname'));
$studentAssistant->setPassword(Input::get('password'));
$studentAssistant->setIdNumber(Input::get('id_number'));
$studentAssistant->setAssignLab(Input::get('lab'));
$studentAssistant->setYearStarted(Input::get('yearStarted'));
$studentAssistant->setYearEnded(Input::get('yearEnded'));
$studentAssistant->setSemester(Input::get('semester'));
$studentAssistant->setMaintenanceSchedule(Input::get('daySchedule'));
$studentAssistant->save();
echo 1;


$complete_name = Input::get('firstname')." ". Input::get('lastname');
$logs = new LogsAdmin();
$logs->generate('Added Student Assistance: ' . $complete_name);
$logs->create();


