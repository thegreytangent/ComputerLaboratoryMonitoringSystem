<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$complaint = new Complaint();

$complaint->setLab(Input::get('lab'));
$complaint->setPCNum(Input::get('unitNum'));
$complaint->setParts(Input::get('parts'));
$complaint->setTeacherId(Session::get('teachers'));
$complaint->setConcerns(Input::get('concerns'));
$complaint->setDate(dateToday());
$complaint->setStatus(0);
$complaint->create();
echo 1;

$log = new Logs();
$log->generate(Input::get('lab'),'has sent complaint to admin.');
