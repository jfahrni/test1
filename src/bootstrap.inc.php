<?php
// activate output buffer
ob_start();

/**
 * Display all errors when APPLICATION_ENV is development.
 */
if ($_SERVER['APPLICATION_ENV'] == 'production') {
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	// set application to debug mode
	define('DEBUG_MODE', true);
} else { define('DEBUG_MODE', false); }

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

/**
 * Set up Global array for storing application environment vars.
 */
$_GLOBALS = array();

// setup database connections
require 'src/db.inc.php';

// load our model
require 'src/model.inc.php';

// load controller
require 'src/controller.inc.php';