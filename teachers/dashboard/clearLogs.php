<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$logs = new Logs();
$logs->setTeacherId(Session::get('teachers'));
$logs->setLab(Input::get('lab'));
$logs->deleteLogs();
echo json_encode(array('res'=>1));
