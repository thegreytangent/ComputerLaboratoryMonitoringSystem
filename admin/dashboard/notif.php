<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php


$data['assistance'] = array();
$data['resources'] = array();
$data['complaint'] = array();
$data['online'] = array();

foreach (RequestAssistance::findbySees(0) as $assist) {
	$data['assistance'][] = array(
		'lab' => $assist->getLab()
	);
}


foreach ( ResourcesRequest::find_by_array('Status',0) as $resources ) {
	$data['resources'][] = array(
		'lab' => $resources->getLab()
	);
}


foreach ( Complaint::find_by_array('Status',0) as $complaint ) {
	$data['complaint'][] = array(
		'lab' => $complaint->getLab()
	);
}


foreach (LabStatus::find_all() as $status ) {
	$data['online'][] = array(
		'teacher' => $status->teacher_online(),
		'lab' => $status->getLab()

	);
}


echo json_encode($data);
