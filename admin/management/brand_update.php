<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$brand = new Peripherals;
$brand->setId(Input::get('id'));
$brand->setBrand(Input::get('brand'));
$brand->updateBrand();
echo 1;
$logs = new LogsAdmin();
$logs->generate('Updated Peripheral Brand');
$logs->create();

?>
