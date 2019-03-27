<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$result = array();
foreach (LabUnits::find_by_UnitLab(Input::get('unit'),Input::get('lab')) as $lab ) 
{
	$per = Peripherals::find_by_id($lab->getPeripheralsId());
	$result[] = array(
		'Id' 			=> $lab->getId(),
		'PartsName' 	=> $per->getPartsName(),
		'SerialNumber' 	=> $lab->getSerialNumber(),
		'brand' 		=> $per->getBrand(),
		'BrandId' 		=> $per->getId()
	);
	
}

echo json_encode($result);