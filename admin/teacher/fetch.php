<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$teacher = Teachers::find_by_id(Input::get('id'));

$departmentList = array();
$semesterList = array();
$semesterSelect = array();


foreach (Teachers::DepartmentList() as $department) {
	if ($teacher->getDepartment() !== $department ) {
		$departmentList[] = $department;
	}
}

foreach (Teachers::semesterList() as $sem => $semester) {
	if ($teacher->getSemester() !== $sem ) {
		$semesterList[] = array('code'=> $sem,'sem' =>$semester );
	}else {
		$semesterSelect[] = array('code'=> $sem,'sem' =>$semester );
	}
}



echo json_encode(array(
	'id' => $teacher->getId(),
	'departmentList' => $departmentList,
	'semesterList' => $semesterList,
	'firstname' => $teacher->getFirstname(),
	'lastname' => $teacher->getLastname(),
	'authorization' => $teacher->getAuthorization(),
	'password' => $teacher->getPassword(),
	'department' => $teacher->getDepartment(),
	'started' => $teacher->getYearStarted(),
	'ended' => $teacher->getYearEnded(),
	'semester' => $semesterSelect
));

