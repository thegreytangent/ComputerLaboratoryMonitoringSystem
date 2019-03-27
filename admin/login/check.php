<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
Session::delete('teachers');
if (Input::get('position') === 'admin') {
	$user = new Users();
	$user->setUsername(Input::get('username'));
	$user->setPassword(Input::get('password'));
	if ($user->login()) {
		Session::put('admin',$user->login()->getId());
		$result = 1;
	} else {
		$result = 0;
	}
} else {
	$login = StudentAssistance::findByIdNumberPassword(Input::get('username'),Input::get('password'));
	if ($login) {
		Session::put('assistant',$login->getId());
		$result = 1;
	}else {
		$result = 0;
	}

}

echo json_encode(array('res'=>$result));
