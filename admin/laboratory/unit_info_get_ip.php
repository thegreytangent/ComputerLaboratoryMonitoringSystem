<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 

$data = array();
$ip = LabIpAddress::findByLabUnit(Input::get('lab'),Input::get('unit'));
if ($ip) {
	$data['IpAddress'] = $ip->getIpAddress();
$data['IPId'] = $ip->getId(); 
} else {
	$data = [];
}

echo json_encode($data);