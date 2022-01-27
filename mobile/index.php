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
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>StickyMobile BootStrap</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
<div id="page">
    <div class="page-content header-clear-medium">

        

        <div class="card card-style">
            <div class="content mb-0">
                <?php if (isset($_GET['inactive'])) { ?>
                    <div class='alert alert-error'>
                        <button class='close' data-dismiss='alert'>&times;</button>
                        <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
                    </div>
                <?php } ?>
        
                <?php if (isset($_GET['error'])) { ?>
                    <div class='alert alert-success'>
                        <button class='close' data-dismiss='alert'>&times;</button>
                        <strong>Wrong Details!</strong>
                    </div>
                <?php } ?>
                <h3>Selamat Datang</h3>
                <p>
                    Masukkan username dan password Anda.
                </p>
                <form action="" method="POST">
        <input type="hidden" class="input-block-level" name="token" value="<?php echo $token;?>">

                    <div class="input-style has-borders no-icon validate-field mb-4">
                        <input type="email" class="form-control validate-text" id="form2" name="txtemail" placeholder="Email">
                        <label for="form2" class="color-highlight">Email</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(required)</em>
                    </div>
                    <div class="input-style has-borders no-icon validate-field mb-4">
                        <input type="password" class="form-control validate-text" id="form3"name="txtupass" placeholder="Password">
                        <label for="form3" class="color-highlight">Password</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(required)</em>
                    </div>
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="form5" class="color-highlight">Level</label>
                        <select id="form5" name="level">
                            <option value="default" disabled selected>Level</option>
                            <option value="Super Admin">Super Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="warga">Warga</option>
                            <option value="4">Administrator</option>
                        </select>
                        <span><i class="fa fa-chevron-down"></i></span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="form5" class="color-highlight">Divisi</label>
                        <select id="form5" name="divisi">
                            <option value="default" disabled selected>Divisi</option>
                            <option value="admin">Administrator</option>
                            <option value="desa">Desa</option>
                            <option value="rumah sakit">Rumah Sakit</option>
                            <option value="sekolah">Sekolah</option>
                            <option value="warga">Warga</option>
                        </select>
                        <span><i class="fa fa-chevron-down"></i></span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>
                    <div class="input-style has-borders no-icon mb-4">
                        <button class="btn btn-full font-900 text-uppercase bg-red-dark btn-m" type="submit" >Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
