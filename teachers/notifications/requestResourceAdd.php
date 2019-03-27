<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$reply = ResourcesRequestReply::find_by_id(Input::get('id'));
$request = ResourcesRequest::find_by_id($reply->getResourcesRequestId());
if ( $reply->updateStatus(1) && $request->updateStatus(1)) {
	echo 1;
}
