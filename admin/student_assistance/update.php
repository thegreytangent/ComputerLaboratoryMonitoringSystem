<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php




$studentAssistant = new StudentAssistance();

$studentAssistant->setId(Input::get('id'));
$studentAssistant->setPassword(StudentAssistance::find_by_id(Input::get('id'))->getPassword());
$studentAssistant->setIdNumber(Input::get('id_number'));
$studentAssistant->setFirstname(Input::get('firstname'));
$studentAssistant->setLastname(Input::get('lastname'));
$studentAssistant->setAssignLab(Input::get('lab'));
$studentAssistant->setYearStarted(Input::get('yearStarted'));
$studentAssistant->setYearEnded(Input::get('yearEnded'));
$studentAssistant->setSemester(Input::get('semester'));
$studentAssistant->setMaintenanceSchedule(Input::get('daySchedule'));
$studentAssistant->update();

echo 1;

$logs = new LogsAdmin();
$logs->generate('Updated Student Assistance');
$logs->create();
