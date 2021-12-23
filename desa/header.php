<?php
session_start();
$root = dirname(__DIR__, 1);

     
require_once $root . '/class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) {
    $user_home->redirect('index.php');
} else {
    $stmt = $user_home->runQuery("SELECT * FROM tbl_users, ds_identitas WHERE userID=? AND app_id=?");
    $stmt->execute([$_SESSION['userSession'], $_SESSION['app_id']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $app_name = $row['nama_desa'];
        $menu = '';
        // Menu code
        if ($user_home->set_divisi('desa')) {
            if ($user_home->set_level('Admin')) {
                // code...
                $menu = 'Admin';
            }
        } else {
                $user_home->redirect('location:javascript://history.go(-1)');
                // $user_home->redirect($_SERVER["HTTP_REFERER"]);

                // $user_home->redirect('error.php');
        }
}


?>
<!DOCTYPE html>
<html lang="zxx" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Softnio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
        <link rel="shortcut icon" href="images/favicon.png">
        <title><?php echo $row['userEmail'];?></title>
        <link rel="stylesheet" href="<?php echo SITE_URL;?>public/assets/css/dashlite.css?ver=2.9.0">
        <link id="skin-default" rel="stylesheet" href="<?php echo SITE_URL;?>public/assets/css/theme.css?ver=2.9.0">
    </head>
    <body class="nk-body ui-rounder npc-default has-sidebar " >
        <div class="nk-app-root">