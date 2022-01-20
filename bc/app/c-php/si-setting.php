<?php
// Default date time
date_default_timezone_set("Asia/Bangkok");

require_once ABSPATH . 'si-tables.php';

/*
 * All Files in Class/App Load
 *
 */
require ABSPATH . SI_INC . 'class-core.php';
require ABSPATH . SI_INC . 'class-register.php';
require ABSPATH . SI_INC . 'class-login.php';
require ABSPATH . SI_INC . 'class-encryption.php';
require ABSPATH . SI_INC . 'class-forget-pass.php';
require ABSPATH . SI_INC . 'class-upload.php';
require ABSPATH . SI_INC . 'class-validation.php';
require ABSPATH . SI_INC . 'class-themes.php';
require ABSPATH . SI_INC . 'function_general.php';
require ABSPATH . SI_INC . 'class-api.php';
require ABSPATH . SI_INC . 'class-warga.php';

/*API CONFIG*/

require ABSPATH . SI_API . 'config.php';
/*
Libraries Folder
*/
require ABSPATH . SI_LIBRARIES . 'phpqrcode/qrlib.php';

// require ABSPATH . SI
//$DB = new Db();
/** @var Validation $GLOBALS */
$GLOBALS['call_class'] = new Validation();
/*
 * TODO Call static function in class-validation.php
 * */
//$stat = new CallStatic();
$GLOBALS['stat'] = new CallStatic();
//
///** @var TYPE_NAME $GLOBALS */
//$GLOBALS['PENGGUNA'] = new Pengguna();
//$GLOBALS['CONFIG'] = new Config();
//$REGISTER = new Register();