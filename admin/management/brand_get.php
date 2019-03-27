<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$brand = Peripherals::find_by_id(Input::get('id'));


echo json_encode(array(
	'brand'=>$brand->getBrand(),
	'parts' => $brand->getPartsName()
));
 ?>