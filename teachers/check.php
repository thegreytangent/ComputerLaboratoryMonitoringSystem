<?php  require_once '../core/init.php'; ?>
<?php ob_clean(); ?>
<?php



foreach (LabStatus::find_all() as $lab) {

	$teacher = Teachers::find_by_id($lab->getTeacherId());
	$data[] = array(
		'lab' => $lab->getLab(),
		'teacher' => $teacher->teacherName()
	);
}

echo json_encode($data);
