<?php
session_start();
// session_regenerate_id(true); // regenerated the session, delete the old one.
ob_start();
define('StTime', microtime(true));

date_default_timezone_set('Asia/Bangkok');
error_reporting(E_ALL ^ E_NOTICE);

define("VERSION" 	,'1.0');

include_once'config/config.php';
include_once'class/database.class.php';
include_once'class/queries.class.php';
include_once'class/app.class.php';
include_once'class/user.class.php';
include_once'class/patient.class.php';
include_once'class/visit.class.php';
include_once'class/analytics.class.php';
include_once'class/log.class.php';
include_once'class/api.class.php';

$wpdb = new Database; // DATABASE CONNECT...
?>