<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$data = array();
foreach (LabStatus::find_all() as $lab) {
	$teacher = Teachers::find_by_id($lab->getTeacherId());
	$data[] = array(
		'lab' => $lab->getLab(),
		'teacher' => $teacher->teacherName()
	);
}



foreach (RequestAssistance::findbySees(0) as $request) {	
	if (!RequestAssistanceReply::find_by('RequestId',$request->getId())) {
		$data['request'][] = $request->getLab();
		
	}else {
		if (!RequestAssistanceRate::find_by('RequestReplyId',RequestAssistanceReply::find_by('RequestId',$request->getId())->getId())) {
			$data['request'][] = $request->getLab();

		} 
	}
}




foreach (ResourcesRequest::find_by_array('Status',0) as $resources )
{
	if (empty(ResourcesRequestReply::findbyLabStatus($resources->getId(),0))) {
		$data['resources'][] = $resources->getLab();

	}
}

foreach ( Complaint::find_by_array('Status',0) as $complaint )
{
	$data['complaint'][] = $complaint->getLab();
}




echo json_encode($data);
