<?php
define("TYPE", "mysql"); // pgsql or mysql
define("DB_HOST", "localhost"); // localhost or ip
define("DB_USER", "radius"); // username database
define("DB_PASSWORD", "radius1234"); // password database
define("DB_DATABASE", "radius"); // table database
define("SSH_HOST", $_SERVER['SERVER_NAME']); // SSH Host
define("SSH_PORT", 22); // Port SSH
define("SSH_USERNAME", "username"); // Username SSH
define("SSH_PASSWORD", "password"); // Password SSH
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'connect.php');
?>
