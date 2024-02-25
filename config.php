<?php

define('APP_URL', 'http://localhost/WISP');
$_app_stage = 'Live';

// Database PHPNuxBill
$db_host	    = 'localhost';
$db_user        = 'root';
$db_password	= '';
$db_name	    = 'wisp';

// Database Radius
$radius_host	    = 'localhost';
$radius_user        = 'root';
$radius_pass    	= '';
$radius_name	    = 'wisp';

if($_app_stage!='Live'){
    error_reporting(E_ERROR);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}else{
    error_reporting(E_ERROR);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}
