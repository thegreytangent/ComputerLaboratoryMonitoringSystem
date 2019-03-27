<?php  require_once '../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$lab = new LabStatus();
$lab->setTeacherId(Session::get('teachers'));
$lab->LogoutLaboratory();
Session::delete('teachers');
session_destroy();
Redirect::to('login.php');
?>
