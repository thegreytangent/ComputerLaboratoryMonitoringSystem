<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$reply = RequestAssistanceReply::find_by_id(Input::get('id'));

$requestAssistance = new RequestAssistance();
$requestAssistance->setId($reply->getRequestId());
if ( $requestAssistance->updateSee() ) {
	$rate = new RequestAssistanceRate();
	$rate->setRequestReplyId($reply->getId());
	$rate->setLab(Input::get('lab'));
	$rate->setRate(Input::get('rate'));
	$rate->setSAId($reply->getStudentAssistanceId());
	$rate->create();
	echo 1;
}

?>
