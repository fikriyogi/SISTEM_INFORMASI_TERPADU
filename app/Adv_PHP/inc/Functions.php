<?php
$test = array(
    'title'=>'Sistem Informasi Sekolah',
    'heading'=>'Kepala'
);
class Theme {
    function template($test, $category){
        echo $test[$category];
    }
    function header() {
        include __DIR__ . "/theme/Header.php";
    }
}



?>
<?php
$theme = new Theme();
?>
<?= $theme->header();?>
<html>
<title><?=$theme->template($test, 'title');?></title>
<body>
<header><?=$theme->template($test, 'heading');?></header>
</body>
</html>