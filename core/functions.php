<?php
function sessionNotification($alert, $message) {
	$notifMsg = '<div class="alert alert-' . $alert . ' " >
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4 id="notif_message">' . $message . '</h4>
	</div>';
	return Session::put('notif', $notifMsg);
}

function timeArrays() {
	return array(
		'7:00-7:30',
		'7:30-8:00',
		'8:00-8:30',
		'8:30-9:00',
		'9:00-9:30',
		'9:30-10:00',
		'10:00-10:30',
		'10:30-11:00',
		'11:00-11:30',
		'11:30-12:00'
	);
}

function timeArraysPM() {
	return array(
	'1:00-1:30',
	'1:30-2:00',
	'2:00-2:30',
	'2:30-3:00',
	'3:00-3:30',
	'3:30-4:00',
	'4:00-4:30',
	'4:30-5:00',
	'5:00-5:30',
	'5:30-6:00',
	'6:00-6:30',
	'6:30-7:00',
	'7:00-7:30',
	'7:30-8:00',
	'8:00-8:30'
	);
}


function daysArray()
{
	return array(
		'Monday',
		'Tuesday',
		'Wednesday',
		'Thursday',
		'Friday'
	);
}


function dateToday() {
	return date("Y-m-d");
}


function readableDate($date) {
	return date("F j, Y", strtotime($date));
}




function removeTime($date) {
	$date = new DateTime($date);
	return $date->format('Y-m-d');
}

function timeNow() {
	return date('H:i:s');
}


function issues() {
	return array(
		401 => 'Not Functioning',
		402 => 'System Error',
		403 => 'Hardware Error',
		404 => 'Defective',
		405 => 'Broken'
	);
}

function semesters($lab)
{
	switch ($lab) {
		case '1st':
		return 'Fist Semester';
		break;
		case '2nd':
		return 'Second Semester';
		break;
		case 'summer':
		return 'Summer';
		break;
	}
}

function semesterList()
{
	return array(
		'1st'=>'First Semester',
		'2nd'=>'Second Semester',
		'summer' => 'Summer'
	);
}

function laboratory($lab)
{
	switch ($lab) {
		case 'lab1':
		return 'Laboratory 1';
		break;
		case 'lab2':
		return 'Laboratory 2';
		break;
		case 'lab3':
		return 'Laboratory 3';
		break;
		case 'lab4':
		return 'Laboratory 4';
		break;
		case 'lab5':
		return 'Laboratory 5';
		break;
		case 'lab6':
		return 'Laboratory 6';
		break;
		case 'lab7':
		return 'Laboratory 7';
		break;
	}
}


function laboratoryList() {
	$array = array();
	for( $x = 1; $x <= 7; $x++ )
	{
		$array[] = 'lab'.$x;
	}
	return $array;
}
