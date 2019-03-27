<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$reply = new RequestAssistanceReply();
$reply->setId(Input::get(''));
$reply->setRequestId(Input::get('request_assistanceId'));
$reply->setMessage(Input::get('message'));
$reply->setLab(Input::get('lab_id'));
$reply->setStudentAssistanceId(Input::get('studentAssisId'));
$reply->setSeen(0);
$reply->create();
echo 1;

$request = new RequestAssistance();
$request->setId(Input::get('request_assistanceId'));
$request->updateSee();