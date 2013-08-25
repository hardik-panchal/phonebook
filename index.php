<?php

/**
 * Main Index File.
 * 
 * App is single point entry
 * 
 * Assigns constant vars
 * Loads the loader
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package phonebook
 * @since August 25, 2013
 * 
 */
session_start();
error_reporting(0);

$db_first = 1;

# DB informaitons
define('DB_HOST', 'localhost');
define('DB_PASSWORD', 'feicNewyopDycs3');
define('DB_UNAME', 'revamp.gbrespond');
define('DB_NAME', 'phonbebook');

include "loader.php";
?>
