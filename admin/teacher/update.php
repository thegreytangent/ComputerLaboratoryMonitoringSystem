<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$findTeacher = Teachers::find_by_id(Input::get('id'));
$teacher = new Teachers();
$teacher->setId(Input::get('id'));
$teacher->setFirstname(Input::get('firstname'));
$teacher->setLastname(Input::get('lastname'));
$teacher->setAuthorization(Input::get('authorization'));
$teacher->setPassword($findTeacher->getPassword());
$teacher->setDepartment(Input::get('department'));
$teacher->setYearStarted(Input::get('yearStarted'));
$teacher->setYearEnded(Input::get('yearEnded'));
$teacher->setSemester(Input::get('semester'));
$teacher->update();
echo json_encode(array('res' => 1));

$logs = new LogsAdmin();
$logs->generate('Update Teacher Info.');
$logs->create();
