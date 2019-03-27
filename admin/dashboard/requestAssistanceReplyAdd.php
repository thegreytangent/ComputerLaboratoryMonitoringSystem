<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$requestAss =  new ResourcesRequestReply();
$requestAss->setResourcesRequestId(Input::get('requestResourcesId')); 
$requestAss->setMessage(Input::get('message')); 
$requestAss->setStatus(0); 
$requestAss->setStudentAssistanceId(Input::get('StudentAssistance'));
$requestAss->create();
echo 1;

$resources = new ResourcesRequest();
$resources->setId(Input::get('requestResourcesId'));
$resources->updateStatus(1);