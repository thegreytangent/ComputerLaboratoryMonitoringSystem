<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$student = new StudentAssistance();
$student->setId(Input::get('id'));
$student->delete();
echo json_encode(array('res' => 1));
