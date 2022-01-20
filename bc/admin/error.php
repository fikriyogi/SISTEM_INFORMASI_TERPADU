<?php
session_start();
$root = dirname(__DIR__, 1);

     
require_once $root . '/class.user.php';
$user_home = new USER();
?>
<!DOCTYPE html>
<html lang="zxx" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Softnio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
        <link rel="shortcut icon" href="/demo7/images/favicon.png">
        <title>Error 404 | DashLite Admin Template</title>
        <title><?php echo $row['userEmail'];?></title>
        <link rel="stylesheet" href="<?php echo SITE_URL;?>public/assets/css/dashlite.css?ver=2.9.0">
        <link id="skin-default" rel="stylesheet" href="<?php echo SITE_URL;?>public/assets/css/theme.css?ver=2.9.0">
    </head>
    <body class="nk-body ui-rounder npc-default pg-error">
        <div class="nk-app-root">
            <div class="nk-main ">
                <div class="nk-wrap nk-wrap-nosidebar">
                    <div class="nk-content ">
                        <div class="nk-block nk-block-middle wide-md mx-auto">
                            <div class="nk-block-content nk-error-ld text-center">
                                <img class="nk-error-gfx" src="<?php echo SITE_URL;?>public/images/gfx/error-404.svg" alt="">
                                <div class="wide-xs mx-auto">
                                    <h3 class="nk-error-title">Oops! Why you’re here?</h3>
                                    <p class="nk-error-text">We are very sorry for inconvenience. It looks like you’re try to access a page that either has been deleted or never existed.</p>
                                    <a href="/demo7/index.html" class="btn btn-lg btn-primary mt-2">Back To Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>