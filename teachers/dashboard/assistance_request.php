<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

$requestAss = new RequestAssistance();
$requestAss->setTeacherId(Session::get('teachers'));
$requestAss->setLab(Input::get('lab'));
$requestAss->setMessage(Input::get('textarea-input'));
$requestAss->setDateTime(date("Y-m-d H:i:s"));
$requestAss->setSee(0);
$requestAss->save();
echo 1;


$log = new Logs();
$log->generate(Input::get('lab'),'has requested assistance to admin.');
