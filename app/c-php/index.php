<?php
require 'si-config.php';

// TODO Call function normal
echo test() . '<br>';
echo masuk() . '<br>';
echo phone_formatting("+62852");
$string = "fakir";

// TODO Call class function using global and set in si-setting.php
/** @var TYPE_NAME $call_class */
echo $call_class->ssl_encrypt($string) . '<br>';
echo $call_class->ssl_decrypt($string) . '<br>';

// TODO Call static function


/** @var TYPE_NAME $stat */
echo $stat::test_static() . '<br>';


echo SI_LoadAdminLink("index.php") . '<br>';
echo SI_LoadPage("default") . '<br>';
echo SI_Tes(+62852);

?>
<!doctype html>
<html lang="<?= SI_LANG; ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="<?= CHARSET; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= SI_JS; ?>bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<?php SI_Tes() ;?>
<p><?= SI_GetNameByEmail("fikriyogi@gmail.com")?></p>
<p><?= SI_UserProfile(4)?></p>
<p><?= SI_SlugPost("ini adalah contoh link slug adalah contoh link slug adalah contoh link slug adalah contoh link slug")?></p>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?= SI_JS; ?>>bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
