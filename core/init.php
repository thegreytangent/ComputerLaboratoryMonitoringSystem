<?php session_start();  ?>
<?php require_once 'config.php'; ?>
<?php
date_default_timezone_set("Asia/manila");
spl_autoload_register(function($class) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/'.FOLDER.'/lib/' . $class . '.php';
});
?>
<?php require_once 'functions.php'; ?>
