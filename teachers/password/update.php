<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

$password = md5(Input::get('newpassword'));


$find = Teachers::find_by_id(Session::get('teachers'));

$teacher = new Teachers;
$teacher->setId($find->getId());
$teacher->setPassword($password);

if (md5(Input::get('oldpassword')) !== $find->getPassword()) {
    $result = 0;
  }else {
  $teacher->updatePassword();
  $result = 1;
}

$log = new Logs();
$log->generate(Input::get('lab'),'Teacher change password');

echo json_encode(array('res'=> $result));
