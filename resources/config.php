<?php
/* CONFIG FILE */

// DATABASE INFO
define('DB_SERVER',		'localhost');
define('DB_DATABASE',	'YOUR_VALUE_DB_DATABASE');
define('DB_USER',		'YOUR_VALUE_DB_USER');
define('DB_PASS',		'YOUR_VALUE_DB_PASS');

// GLOBAL VARS
define('LOCAL', 		$_SERVER['HTTP_HOST']);
define('PATH',			$_SERVER['REQUEST_URI']);
define('USER_IP',		$_SERVER['REMOTE_ADDR']);
define('ROOT_PATH',		$_SERVER['DOCUMENT_ROOT']);
define('TMP_PATH',		'/resources/assets/tmp/');

// ERROR
ini_set('display_errors', 	0);
ini_set('error_reporting', 	E_ALL);
