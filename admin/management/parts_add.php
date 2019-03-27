<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$brand = new Peripherals();
$brand->setPartsName(Input::get('peripheral'));
$brand->setBrand(Input::get('brand'));
$brand->create();
echo 1;
$logs = new LogsAdmin();
$logs->generate('Added Peripheral Brand');
$logs->create();
 ?>
