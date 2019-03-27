<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

$logs = new Logs();
$logsAdmin = new LogsAdmin();
if ($logs->deleteAllLogs() && $logsAdmin->deleteAllLogs()) 
{
	echo json_encode(array('res' => 1));
}
