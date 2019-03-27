<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

$student = Input::get('student');
$time = Input::get('time');
$day = Input::get('day');
$tm = Input::get('tm');



if (Schedules::find_schedules($student,$time,$day,$tm)) {
	Schedules::find_schedules_delete($student,$time,$day,$tm);

}else {


	$schedule = new Schedules();
	$schedule->setStudentAssisId($student);
	$schedule->setTime($time);
	$schedule->setDay($day);
	$schedule->setTM($tm);

	$schedule->create();

	$logs = new LogsAdmin();
	$logs->generate('Added SA Schedules');
	$logs->create();


}
echo json_encode(array('res'=>1));
