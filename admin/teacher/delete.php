<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$teacher = new Teachers();
$teacher->setId(Input::get('id'));
$teacher->delete();
echo json_encode(array('res' => 1));

$logs = new LogsAdmin();
$logs->generate('Delete Teacher Info.');
$logs->create();
