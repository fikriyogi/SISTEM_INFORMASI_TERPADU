<?php
session_start();
// $root = dirname(__DIR__, 0);

// Path to the front controller (this file)
define('BASE_URL', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the line that might need to be changed, depending on your folder structure.
$pathsPath = realpath(BASE_URL . '../app/Config/Paths.php');


require_once 'class.user.php';
$user_login = new USER();

if ($user_login->is_logged_in() != "") {
    $user_login->redirect('home.php');
}

if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];

// Verify token
if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {
        if (isset($_POST['btn-login'])) {
            $email = trim($_POST['txtemail']);
            $upass = trim($_POST['txtupass']);
            $level = trim($_POST['level']);
            $divisi = trim($_POST['divisi']);

            if ($user_login->login($email, $upass, $level, $divisi)) {
                $user_login->redirect('home.php');
            }
        }

    } else {
        echo 'Sorry token not valid';
    }
}




?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Login</title>
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

<body id="login">
    <?php echo $pathsPath;?>
<div class="container">
    <?php if (isset($_GET['inactive'])) { ?>
        <div class='alert alert-error'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
        </div>
    <?php } ?>
    <form class="form-signin" method="post">
        <?php if (isset($_GET['error'])) { ?>
            <div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Wrong Details!</strong>
            </div>
        <?php } ?>
        <ul>
            <li>Administrator</li>
            <li>Desa</li>
            <ul>
                <li>Admin Desa</li>
                <li>Perangkat Desa</li>
                <li>Kepala Dusun</li>
                <li>Ketua RW</li>
                <li>Ketua RT</li>    
            </ul>
            <li>Rumah Sakit</li>
            <ul>
                <li>Admin Rumah Sakit</li>
                <li>Perangkat Desa</li>
                <li>Kepala Dusun</li>
                <li>Ketua RW</li>
                <li>Ketua RT</li>    
            </ul>
            <li>Puskesmas</li>
            <ul>
                <li>Admin Puskesmas</li>
                <li>Kepala Puskesmas</li>
                <li>Dokter</li>
                <li>Karyawan</li>
                <li>Kepala Apotik</li>    
            </ul>
            <li>Sekolah</li>
            <ul>
                <li>Admin Sekolah</li>
                <li>Kepala Sekolah</li>
                <li>Guru / Pendidik</li>
                <li>Karyawan</li>
                <li>Kepala Pustaka</li>    
                <li>Orang Tua</li>
            </ul>

        </ul>
        <h2 class="form-signin-heading">Sign In.</h2>
        <hr/>
        <input type="text" class="input-block-level" name="token" value="<?php echo $token;?>">
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required/>
        <input type="password" class="input-block-level" placeholder="Password" name="txtupass" required/>
        <select class="form-control" name="level">
            <option value="Super Admin">Super Admin</option>
            <option value="Admin">Admin</option>
            <option value="3">Administrator</option>
            <option value="4">Administrator</option>
        </select>
        <select class="form-control" name="divisi">
            <option value="admin">Administrator</option>
            <option value="desa">Desa</option>
            <option value="rumah sakit">Rumah Sakit</option>
            <option value="sekolah">Sekolah</option>
            <option value="4">Administrator</option>
        </select>
        <hr/>
        <button class="btn btn-large btn-primary" type="submit" name="btn-login">Sign in</button>
        <a href="signup.php" style="float:right;" class="btn btn-large">Sign Up</a>
        <hr/>
        <a href="fpass.php">Lost your Password ? </a>
    </form>

</div> <!-- /container -->
<?php  
include 'footer.php';

?>