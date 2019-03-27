<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
	

if ( Teachers::find_by('Authorization',Input::get('authorization')) ) {
	echo -1;
die();
} else {

$teacher = new Teachers();
$teacher->setId(Input::get('Id'));
$teacher->setAuthorization(Input::get('authorization'));
$teacher->setFirstname(Input::get('firstname'));
$teacher->setLastname(Input::get('lastname'));
$teacher->setPassword(md5(Input::get('password')));
$teacher->setYearStarted(Input::get('yearStarted'));
$teacher->setYearEnded(Input::get('yearEnded'));
$teacher->setSemester(Input::get('semester'));
$teacher->setDepartment(Input::get('department'));
$teacher->save();
echo 1;

$complete_name = Input::get('firstname')." ". Input::get('lastname');

$logs = new LogsAdmin();
$logs->generate('Admin added new teacher account: ' . $complete_name);
$logs->create();


}
 ?>
