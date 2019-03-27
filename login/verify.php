<?php  require_once '../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

$teacher  = Teachers::findByAuthoPassword(Input::get('authorizationId'),md5(Input::get('password')));


if ($teacher) {
	Session::put('teachers',$teacher->getId());
	$lab = new LabStatus();
	$lab->setTeacherId($teacher->getId());
	$lab->setLab(Input::get('select'));
	$lab->setStatus('online');

	if ($lab->beingUse() || $lab->youLoginOtherComputer()) {
		echo -1;
	}
	else {
		$lab->create();
		echo 1;
	}

} else {
	echo 0;
}


?>
