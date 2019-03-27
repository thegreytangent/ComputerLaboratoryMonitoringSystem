<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$resource = ResourcesRequest::selectLabStatus(Input::get('lab'),0);
$data = array();
if ($resource) {

	if (!ResourcesRequestReply::find_by('ResourcesRequestId',$resource->getId())) {
	$teacher = Teachers::find_by_id($resource->getTeacherId());
	$data['id'] 		= $resource->getId();
	$data['lab'] 		= $resource->getLab();
	$data['teacher'] 	= $teacher->teacherName();
	$data['peripherals']= $resource->getPeripherals();
	$data['note'] 		= $resource->getNote();
}
} 

echo json_encode($data);
