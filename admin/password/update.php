<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

// $password = md5(Input::get('newpassword'));
$password = Input::get('newpassword');
$oldPassword = md5(Input::get('oldpassword'));


$session = (isset($_SESSION['admin'])) ? $_SESSION['admin'] : $_SESSION['assistant'];
$find = (isset($_SESSION['admin'])) ?  Users::find_by_id($session) : StudentAssistance::find_by_id($session);
$user = (isset($_SESSION['admin'])) ?   new Users : new StudentAssistance;


$user->setId($find->getId());
$user->setPassword($password);

if ( $oldPassword !== $find->getPassword()) {
	$result = 0;
}else {
	$user->updatePassword();
	$result = 1;
}


echo json_encode(array('res'=> $result));
