<?php
/**
 * Used to set up and fix common variables and include
 * the WordPress procedural and class library.
 *
 * Allows for some configuration in si-config.php (see default-constants.php)
 *
 * @package WordPress
 */

/**
 * Stores the location of the WordPress directory of functions, classes, and core content.
 *
 * @since 1.0.0
 */

date_default_timezone_set("Asia/Bangkok");


require ABSPATH . SI_INC .      '/Autoload.php';
require ABSPATH . SI_INC .      '/Functions.php';

/*
 * All Files in Class/App Load
 *
 */
require ABSPATH . SI_CORE .     '/Autoload.php';

require ABSPATH . SI_APP .      '/Autoload.php';



//$DB = new Db();
/** @var TYPE_NAME $GLOBALS */
$GLOBALS['DB'] = new Db();

/** @var TYPE_NAME $GLOBALS */
$GLOBALS['PENGGUNA'] = new Pengguna();
$GLOBALS['CONFIG'] = new Config();
//$REGISTER = new Register();


