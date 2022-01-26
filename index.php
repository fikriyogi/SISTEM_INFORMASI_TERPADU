<?php
require 'si-config.php';
require_once SI_THEME . 'default/header.php';



// TODO Call function normal
echo test() . '<br>';
$string = "Selamat datang". '<br>';

// TODO Call class function using global and set in si-setting.php
/** @var  $call_class */
echo $call_class->SI_SSLEncrypt($string) . '<br>';
echo $call_class->SI_SSLDecrypt($string) . '<br>';

// TODO Call static function


/** @var  $stat */
echo $stat::test_static() . '<br>';


echo SI_LoadAdminLink("index.php") . '<br>';
//echo SI_LoadPage("default") . '<br>';

?>
<?php
require_once SI_THEME . 'default/footer.php';
?>