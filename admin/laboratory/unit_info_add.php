<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$perId_array = array();
$serial_array = array();
$unitId_array = array();





foreach (Input::get('unit_info') as $devices => $PerIdSerials)
{
	foreach ($PerIdSerials as $option => $value) {
		if ($option === 'id')
		{
			$perId_array[] = $value;
		}
		elseif($option === 'UnitId')
		{
			$unitId_array[] = $value;
		}
		else
		{
			$serial_array[] = $value;
		}
	}
}



$unit_info = array_combine($perId_array, $serial_array);

$x = 0;
foreach ($unit_info as $id => $serial)
{
	$unit_id =  $unitId_array[$x]. '<br/>';

	$labUnits = new LabUnits;
	$labUnits->getId($unit_id);
	$labUnits->setUnitCode(Input::get('pc_id'));
	$labUnits->setLabCode(Input::get('pc_lab'));
	$labUnits->setPeripheralsId($id);
	$labUnits->setSerialNumber($serial);
	$labUnits->save();
	$x++;
}


$IpLab = new LabIpAddress();
$IpLab->setId(Input::get('labIPId'));
$IpLab->setLab(Input::get('pc_lab'));
$IpLab->setUnit(Input::get('pc_id'));
$IpLab->setIpAddress(Input::get('ipAddress'));

(Input::get('labIPId')) ? $IpLab->update() : $IpLab->create();



echo 1;





$logs = new LogsAdmin();
$logs->generate('Added Unit Information');
$logs->create();
?>
