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