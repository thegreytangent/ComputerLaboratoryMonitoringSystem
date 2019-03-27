<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
session_destroy();
Redirect::to('../../login/login.php');
