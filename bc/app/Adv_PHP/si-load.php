<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the si-config.php file. The si-config.php
 * file will then load the si-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the si-config.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * si-config.php file.
 *
 * Will also search for si-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @package WordPress
 */

/** Define ABSPATH as this file's directory */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/*
 * The error_reporting() function can be disabled in php.ini. On systems where that is the case,
 * it's best to add a dummy function to the si-config.php file, but as this call to the function
 * is run prior to si-config.php loading, it is wrapped in a function_exists() check.
 */
if ( function_exists( 'error_reporting' ) ) {
    /*
     * Initialize error reporting to a known set of levels.
     *
     * This will be adapted in wp_debug_mode() located in wp-inc/load.php based on WP_DEBUG.
     * @see http://php.net/manual/en/errorfunc.constants.php List of known error levels.
     */
    error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
}

/*
 * If si-config.php exists in the WordPress root, or if it exists in the root and si-settings.php
 * doesn't, load si-config.php. The secondary check for si-settings.php has the added benefit
 * of avoiding cases where the current directory is a nested installation, e.g. / is WordPress(a)
 * and /blog/ is WordPress(b).
 *
 * If neither set of conditions is true, initiate loading the setup process.
 */

    require_once ABSPATH . 'si-config.php';

    // A config file doesn't exist.


    // Standardize $_SERVER variables across setups.
    require_once ABSPATH . SI_INC . '/Autoload.php';
