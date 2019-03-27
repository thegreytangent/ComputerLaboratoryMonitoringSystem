<?php require_once '../core/init.php'; ?>
<?php
$requestAssistance = count(RequestAssistanceReply::findbyLabSeen(Input::get('lab'), 0));
$requestResources = count(ResourcesRequestReply::find_by_array('Status', 0));

$count = array_sum(array($requestAssistance,$requestResources));
echo ($count !== 0 ) ? 1 : 0;
?>
