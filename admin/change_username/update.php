<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php


$users = new Users();
$users->setId($_SESSION['admin']);
$users->setUsername(Input::get('username'));


$users->update_username();
echo json_encode(array( 'res' => 1));