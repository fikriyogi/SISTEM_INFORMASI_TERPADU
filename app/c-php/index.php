<?php
require 'si-config.php';
require_once SI_THEME . 'default/header.php';


require 'si-config.php';

// TODO Call function normal
echo test() . '<br>';
echo masuk() . '<br>';
echo phone_formatting("+62852");
$string = "fakir";

// TODO Call class function using global and set in si-setting.php
/** @var  $call_class */
echo $call_class->ssl_encrypt($string) . '<br>';
echo $call_class->ssl_decrypt($string) . '<br>';

// TODO Call static function


/** @var  $stat */
echo $stat::test_static() . '<br>';


echo SI_LoadAdminLink("index.php") . '<br>';
echo SI_LoadPage("default") . '<br>';
echo SI_Tes(+62852);

?>
<?php SI_Tes() ;?>
<p><?= SI_GetNameByEmail("fikriyogi@gmail.com")?></p>
<p><?= SI_UserProfile(4)?></p>
<p><?= SI_SlugPost("ini adalah contoh link slug adalah contoh link slug adalah contoh link slug adalah contoh link slug")?></p>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->

<?php
require_once SI_THEME . 'default/footer.php';
?>