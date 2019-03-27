<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
	$logs = new LogsAdmin();
$maintainace = new Maintenance();
$maintainace->setId(Input::get('id'));
if (Input::get('action') == 'delete')
{
	$maintainace->delete();
	$logs->generate('Deleted Maintenance Log');
}else {
	$maintainace->setStudentAssisId(Input::get('StudentAssisId'));
	$maintainace->setLab(Input::get('Lab'));
	$maintainace->setUnits(Input::get('Units'));
	$maintainace->setIssue(Input::get('Issue'));
	$maintainace->setIssueDeviceName(Input::get('IssueDeviceName'));
	$maintainace->setIssueDeviceSerial(Input::get('IssueDeviceSerial'));
	$maintainace->setActionTaken(Input::get('ActionTaken'));
	$maintainace->setPeripheralsId(Input::get('PeripheralsId'));
	$maintainace->setPeripherlasSerial(Input::get('PeripherlasSerial'));
	$maintainace->setDate(Input::get('Date'));
	$maintainace->setRemarks(Input::get('Remarks'));
	$maintainace->save();
	$logs->generate('Added Maintenance Log');
}
	$logs->create();
echo json_encode(array('res'=>1));
?>
