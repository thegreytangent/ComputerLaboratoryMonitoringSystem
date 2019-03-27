<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 


$request = new ResourcesRequest();
$request->setLab(Input::get('lab'));
$request->setTeacherId(Session::get('teachers'));
$request->setPeripherals(Input::get('peripheral'));
$request->setNote(Input::get('note'));
$request->setStatus(0);
$request->setDate(dateToday());
$request->create();
echo 1;


$log = new Logs();
$log->generate(Input::get('lab'),'has sent request to admin.');

?>
