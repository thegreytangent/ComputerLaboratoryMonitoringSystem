<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$teacher = new Teachers();
$teacher->setId(Input::get('id'));
$teacher->setPassword(md5('1234'));
if( $teacher->updatePassword() )  {
	echo json_encode(array('res' => 1));
}
