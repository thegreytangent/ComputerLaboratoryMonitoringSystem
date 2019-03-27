<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$brand = new Peripherals();
$brand->setId(Input::get('id'));
$brand->delete();
echo 1;
$logs = new LogsAdmin();
$logs->generate('Deleted Peripheral Brand');
$logs->create();

 ?>
