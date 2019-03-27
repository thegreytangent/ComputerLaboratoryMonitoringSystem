<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$data = array();
$see = new RequestAssistance();
$see->setId(Input::get('id'));
$see->updateSee();
echo json_encode(array('Message' => RequestAssistance::find_by_id(Input::get('id'))->getMessage() ));
