<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$logs = new LogsAdmin();
$resources = new Resources;
$resources->setId(Input::get('id'));
if (Input::get('action') == 'delete') {
	$resources->delete();


	$logs->generate('Deleted Resources Records');



} else {
$resources->setResourcesName(Input::get('ResourcesName'));
$resources->setCount(Input::get('Qty'));
$resources->save();
$logs->generate('Added Resources Records');
}

echo 1;
$logs->create();


?>
