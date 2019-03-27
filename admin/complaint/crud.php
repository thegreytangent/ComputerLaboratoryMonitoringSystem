<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 

if (Input::get('action') === 'update_status') {
	$complaint = new complaint();
	$complaint->setId(Input::get('id'));
	$complaint->setStatus(1);
	$complaint->updateStatus();
}

echo json_encode(array('status' => 1));
