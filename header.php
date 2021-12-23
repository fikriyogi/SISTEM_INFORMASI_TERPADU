<?php 
// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the line that might need to be changed, depending on your folder structure.
$pathsPath = realpath(FCPATH . 'app/Config/Paths.php');
$patc = str_replace(realpath(dirname(__FILE__) . '/..'), '', realpath(dirname(__FILE__)));
dirname(__DIR__);

require $pathsPath;
$paths = new Paths();

session_start();
require_once __DIR__ . '/class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) {
    $user_home->redirect('index.php');
} else {
    $stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=?");
    $stmt->execute([$_SESSION['userSession']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user_home->set_divisi('admin')) {
        if ($user_home->set_level('Super Admin')) {
            // code...
            $app_name = 'Sistem Informasi Terpadu';
            $menu = 'Super Admin';
        }
    } else {
            $user_home->redirect('location:javascript://history.go(-1)');
            // $user_home->redirect('error.php');
    }


}


?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <title><?php echo $row['userEmail']; ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo SITE_URL; ?>public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo SITE_URL; ?>css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo SITE_URL; ?>styles.css" rel="stylesheet" media="screen">
    <link href="navbar-top-fixed.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo SITE_URL; ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>