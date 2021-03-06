<?php 


session_start();
require_once  'class.user.php';
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
            $user_home->redirect('index.php');
            // $user_home->redirect('error.php');
    }


}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
        <title>StickyMobile PWA - Mobile Bootstrap 5 Template</title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.css"/>
        <link href="styles/lightgallery.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css"/>
        <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js"/>
        <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png"/>
        <title>Static Template</title>
    </head>
    <body class="theme-light example" data-highlight="highlight-red" data-gradient="body-default">
        <div id="preloader">
            <div class="spinner-border color-highlight" role="status"></div>
        </div>
        <div id="page">
            <div class="header  header-fixed header-logo-app header-search">
                <a href="index.html" class="header-title ">Hai, <?php echo $row['userName']; ?></a>
                <a href="logout.php" class="header-icon  header-icon-2">
                    <i class="fa fa-cog"></i>
                </a>
                <a href="#" data-toggle-search class="header-icon header-icon-3">
                    <i class="fa fa-search"></i>
                </a>
                <div class="search-box">
                    <input type="text" class="px-3" placeholder="Search here.. - try the word demo " data-search>
                    <a href="#" data-toggle-search class="mt-0 me-n3">
                        <i class="fa fa-angle-up color-highlight"></i>
                        <i class="clear-search"></i>
                    </a>
                </div>
            </div>
            <div id="footer-bar" class="footer-bar-1">
                <a href="index.html">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="perangkat-desa.html" class="active-nav">
                    <i class="fa fa-star"></i>
                    <span>Features</span>
                </a>
                <a href="#" data-menu="menu-wizard-step-1">
                    <i class="fa fa-plus color-yellow-dark"></i>
                </a>
                <a href="profile.html">
                    <i class="fa fa-share"></i>
                    <span>Search</span>
                </a>
                <a href="#" data-menu="menu-settings">
                    <i class="fas fa-bars"></i>
                    <span>Settings</span>
                </a>
            </div>
            <div class="page-content header-clear-medium">
                <div class="splide single-slider mb-3" id="single-slider-2">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div data-card-height="200" class="card mb-0 bg-18 shadow-l">
                                    <div class="card-bottom text-center mb-3">
                                        <h2 class="color-white text-uppercase font-900 mb-0">Splendid Simplicity</h2>
                                        <p class="under-heading color-white">A new generation of Mobile Kits.</p>
                                    </div>
                                    <div class="card-overlay bg-gradient"></div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div data-card-height="300" class="card mb-0 bg-14 shadow-l">
                                    <div class="card-bottom text-center mb-3">
                                        <h2 class="color-white text-uppercase font-900 mb-0">Top Notch Quality</h2>
                                        <p class="under-heading color-white">Flexibility, Speed, Ease of Use.</p>
                                    </div>
                                    <div class="card-overlay bg-gradient"></div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div data-card-height="300" class="card mb-0 bg-14 shadow-l">
                                    <div class="card-bottom text-center mb-3">
                                        <h2 class="color-white text-uppercase font-900 mb-0">Perfectly Organized</h2>
                                        <p class="under-heading color-white">Mobile Website, or App or PWA Ready.</p>
                                    </div>
                                    <div class="card-overlay bg-gradient"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mx-3 card-style mb-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="align-self-start">
                                <h4 class="mb-0 font-18">Vaksin Tahap 1</h4>
                                <span class="font-11">
                                    <i class="fa fa-map-marker font-10 pe-1"></i>
                                    Puskesmas, Lereng
                                </span>
                            </div>
                            <div class="align-self-start ms-auto ps-3">
                                <span class="icon icon-xxs rounded-xl bg-white color-brown-dark">
                                    <i class="fa fa-check color-green-dark font-11"></i>
                                </span>
                            </div>
                        </div>
                        <div class="divider mt-2 mb-2"></div>
                        <div class="d-flex">
                            <div class="align-self-center">
                                <span class="font-12 color-theme opacity-70 font-500">
                                    <i class="far fa-clock font-11 pe-1"></i>
                                    07:30 AM - 08:00 AM
                                </span>
                            </div>
                            <div class="align-self-center ms-auto">
                                <span class="font-12 color-theme opacity-30 font-500">
                                    <i class="far fa-car font-11 pe-1"></i>
                                    25 min by car
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay bg-green-dark opacity-50"></div>
                </div>
                <div class="card mx-3 card-style mb-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="align-self-start">
                                <h4 class="mb-0 font-18">Vaksin Tahap 2</h4>
                                <span class="font-11">
                                    <i class="fa fa-map-marker font-10 pe-1"></i>
                                    Bangkinang, Kampar
                                </span>
                            </div>
                            <div class="align-self-start ms-auto ps-3">
                                <span class="icon icon-xxs rounded-xl bg-white color-brown-dark">
                                    <i class="fa fa-mountain color-red-dark font-11"></i>
                                </span>
                            </div>
                        </div>
                        <div class="divider mt-2 mb-2"></div>
                        <div class="d-flex">
                            <div class="align-self-center">
                                <span class="font-12 color-theme opacity-70 font-500">
                                    <i class="far fa-clock font-11 pe-1"></i>
                                    09:00 AM - 11:00 AM
                                </span>
                            </div>
                            <div class="align-self-center ms-auto">
                                <span class="font-12 color-theme opacity-30 font-500">
                                    <i class="fa fa-moon font-11 pe-1"></i>
                                    Do not Disturb
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay bg-red-dark opacity-30"></div>
                </div>
                <div class="card card-style mb-4">
                    <div class="content mb-0">
                        <div class="row text-center mb-0">
                            <div class="col-6">
                                <span class="badge bg-red-dark position-absolute font-8 font-400 py-2 px-2 mt-n1">ORGANIZER</span>
                                <img src="images/avatars/12s.png" class="rounded-circle bg-green-dark" width="120">
                                <h5 class="font-14 mb-3">Daniele</h5>
                            </div>
                            <div class="col-6">
                                <span class="badge bg-red-dark position-absolute font-8 font-400 py-2 px-2 mt-n1">HOSTER</span>
                                <img src="images/avatars/2s.png" class="rounded-circle bg-dark-dark" width="120">
                                <h5 class="font-14 mb-3">David</h5>
                            </div>
                            <div class="col-12">
                                <div class="divider mb-3"></div>
                            </div>
                            <div class="col-4">
                                <span class="badge bg-red-dark position-absolute font-8 font-400 pt-1">NEW POST</span>
                                <img src="images/avatars/10s.png" class="rounded-xl bg-green-dark" width="80">
                                <h5 class="font-14 mb-3">Ashley</h5>
                            </div>
                            <div class="col-4">
                                <span class="badge bg-red-dark position-absolute font-8 font-400 pt-1">PENDING</span>
                                <img src="images/avatars/1s.png" class="rounded-xl bg-blue-dark" width="80">
                                <h5 class="font-14 mb-3">Jane</h5>
                            </div>
                            <div class="col-4">
                                <span class="badge bg-red-dark position-absolute font-8 font-400 pt-1">MISSED CALL</span>
                                <img src="images/avatars/2s.png" class="rounded-xl bg-magenta-dark" width="80">
                                <h5 class="font-14 mb-3">Jackson</h5>
                            </div>
                            <div class="col-12">
                                <div class="divider mb-3"></div>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/4s.png" class="rounded-xl bg-yellow-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Statistik Covid-19</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/5s.png" class="rounded-xl bg-orange-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Perpustakaan Desa</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/7s.png" class="rounded-xl bg-mint-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Bantuan Rumah</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/8s.png" class="rounded-xl bg-teal-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Bencana </h5>
                            </div>
                            <div class="col-12">
                                <div class="divider mb-3"></div>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/4s.png" class="rounded-xl bg-yellow-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3"></h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/5s.png" class="rounded-xl bg-orange-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Joey</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/7s.png" class="rounded-xl bg-mint-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Michelle</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/8s.png" class="rounded-xl bg-teal-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Ariana</h5>
                            </div>
                            <div class="col-12">
                                <div class="divider mb-3"></div>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/4s.png" class="rounded-xl bg-yellow-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">David</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/5s.png" class="rounded-xl bg-orange-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Joey</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/7s.png" class="rounded-xl bg-mint-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Michelle</h5>
                            </div>
                            <div class="col-3">
                                <img src="images/avatars/8s.png" class="rounded-xl bg-teal-dark menu-dashboard" width="60">
                                <h5 class="font-14 mb-3">Ariana</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-style mb-2">
                    <div class="d-flex px-3 py-3">
                        <div class="align-self-center">
                            <i class="fa fa-trophy color-yellow-dark fa-3x pe-3"></i>
                        </div>
                        <div class="align-self-center">
                            <h5>YOU WON</h5>
                            <p class="mb-0 mt-n2 opacity-50 font-11">1 Free Event Invite</p>
                        </div>
                        <div class="ms-auto align-self-center">
                            <a href="#" class="btn btn-xxs bg-highlight scale-box text-uppercase font-800">Claim</a>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 pe-0">
                        <div class="card card-style">
                            <img src="images/pictures/21.jpg" class="img-fluid"/>
                            <div class="p-2">
                                <h3>Box Container</h3>
                                <p class="mb-2">Cash bertahap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ps-0">
                        <div class="card card-style">
                            <img src="images/pictures/22.jpg" class="img-fluid"/>
                            <div class="p-2">
                                <h3>Mesin Kasir</h3>
                                <p class="mb-2">Cash bertahap</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 pe-0">
                        <div class="card card-style">
                            <img src="images/pictures/21.jpg" class="img-fluid"/>
                            <div class="p-2">
                                <h3>Box Container</h3>
                                <p class="mb-2">Cash bertahap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ps-0">
                        <div class="card card-style">
                            <img src="images/pictures/22.jpg" class="img-fluid"/>
                            <div class="p-2">
                                <h3>Mesin Kasir</h3>
                                <p class="mb-2">Cash bertahap</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="content">
                        <h4>Menu</h4>
                        <p>Simple accordions, you can use them with or without icons, it's incredibly simple.
        </p>
                    </div>
                    <div class="accordion" id="accordion-1">
                        <div class="mb-">
                            <button class="btn accordion-btn no-effect" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                <i class="fa fa-heart color-red-dark me-2"></i>
                                Accordion Title 1
                <i class="fa fa-plus font-10 accordion-icon"></i>
                            </button>
                            <div id="collapse1" class="collapse" data-bs-parent="#accordion-1">
                                <div class="pt-1 pb-2 ps-3 pe-3">
                                    <p>This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <button class="btn accordion-btn no-effect" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                <i class="fa fa-star color-yellow-dark me-2"></i>
                                Bantuan &dukungan<i class="fa fa-chevron-down font-10 accordion-icon"></i>
                            </button>
                            <div id="collapse2" class="collapse" data-bs-parent="#accordion-1">
                                <div class="pt-1 pb-2 ">
                                    <div class="card card-style gradient-green">
                                        <div class="content color-white">
                                            <h4 class="color-white">Content Gradient</h4>
                                            <div class="list-group list-custom-large">
                                                <a href="#">
                                                    <i class="fa font-18 fa-shopping-bag color-brown-dark"></i>
                                                    <span>Appeca Mobile</span>
                                                    <strong>A powerful Mobile Template</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa font-14 fa-brush rounded-xl shadow-xl bg-blue-dark"></i>
                                                    <span>Bars Mobile</span>
                                                    <strong>Perfectly Balanced</strong>
                                                    <span class="badge bg-red-dark font-11">1</span>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa font-14 fa-tint rounded-sm shadow-m bg-green-dark"></i>
                                                    <span>Asterial Mobile</span>
                                                    <span class="badge bg-blue-dark">FRESH</span>
                                                    <strong>The iOS Monster Template</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <a data-trigger-switch="switch-1" class="border-0" href="#">
                                                    <i class="fa font-14 fa-mobile-alt shadow-s bg-yellow-dark"></i>
                                                    <span>Apptastic Mobile</span>
                                                    <strong>iOS Designed Style</strong>
                                                    <div class="custom-control ios-switch scale-switch">
                                                        <input type="checkbox" class="ios-input" id="switch-1">
                                                        <label class="custom-control-label" for="switch-1"></label>
                                                    </div>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <button class="btn accordion-btn no-effect" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                <i class="fa fa-star color-yellow-dark me-2"></i>
                                Pengaturan &Privasi<i class="fa fa-chevron-down font-10 accordion-icon"></i>
                            </button>
                            <div id="collapse5" class="collapse" data-bs-parent="#accordion-1">
                                <div class="pt-1 pb-2 ps-3 pe-3">
                                    <p>This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn accordion-btn no-effect" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                <i class="fa fa-cloud color-blue-dark me-2"></i>
                                Accordion Title 3
                <i class="fa fa-arrow-down font-10 accordion-icon"></i>
                            </button>
                            <div id="collapse3" class="collapse" data-bs-parent="#accordion-1">
                                <div class="pt-1 pb-2 ps-3 pe-3">
                                    <p>This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content mb-0">
                        <a href="#" data-menu="menu-transaction-1" class="d-flex mb-3">
                            <div class="align-self-center">
                                <img src="http://localhost/bc/sticky/images/pictures/faces/2s.png" width="40" class="rounded-xl me-3">
                            </div>
                            <div class="align-self-center">
                                <h1 class="mb-n2 font-16">John Doe</h1>
                                <p class="font-11 opacity-60">Payment Sent</p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h2 class="mb-n1 font-18 color-red-dark">$530.24</h2>
                                <p class="font-12 opacity-50">15th July 2025</p>
                            </div>
                        </a>
                        <div class="divider"></div>
                        <div class="demo-gallery">
                            <ul id="lightgallery" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/2-1600.jpg, img/1-480.jpg 480, img/1.jpg 800" data-src="img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="img/thumb-1.jpg">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800" data-src="img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                    <a href="">
                                        <img class="img-responsive" src="img/thumb-2.jpg">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/13-375.jpg 375, img/13-480.jpg 480, img/13.jpg 800" data-src="img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                    <a href="">
                                        <img class="img-responsive" src="img/thumb-13.jpg">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/4-375.jpg 375, img/4-480.jpg 480, img/4.jpg 800" data-src="img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                    <a href="">
                                        <img class="img-responsive" src="img/thumb-4.jpg">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-2">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row icons d-flex align-items-center">
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-smile-o ml-2"></i>
                                </div>
                                <div class="d-flex flex-row muted-color">
                                    <span>2 comments</span>
                                    <span class="ml-2">Share</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="d-flex justify-content-between p-2 px-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="images/pictures/faces/2s.png" width="50" class="mr-3 rounded-circle">
                                        <div class="d-flex flex-column ml-2">
                                            <span class="font-weight-bold">Jeanette Sun</span>
                                            <small class="text-primary">Collegues</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-1 ellipsis">
                                        <small class="mr-2">20 mins</small>
                                        <i class="fa fa-ellipsis-h"></i>
                                    </div>
                                </div>
                                <a class="col" data-gallery="gallery-1" href="images/pictures/18.jpg" title="Vynil and Typerwritter">
                                    <img src="images/pictures/18.jpg" data-src="images/pictures/18.jpg" class="preload-img img-fluid entered loaded" alt="img" data-ll-status="loaded">
                                    <p class="font-600 pb-1">Writer</p>
                                </a>
                                <div class="p-2">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-row icons d-flex align-items-center">
                                            <i class="fa fa-heart"></i>
                                            <i class="fa fa-smile-o ml-2"></i>
                                        </div>
                                        <div class="d-flex flex-row muted-color">
                                            <span>2 comments</span>
                                            <span class="ml-2">Share</span>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="d-flex justify-content-between p-2 px-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="images/pictures/faces/2s.png" width="50" class="mr-3 rounded-circle">
                                        <div class="d-flex flex-column ml-2">
                                            <span class="font-weight-bold">Jeanette Sun</span>
                                            <small class="text-primary">Collegues</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-1 ellipsis">
                                        <small class="mr-2">20 mins</small>
                                        <i class="fa fa-ellipsis-h"></i>
                                    </div>
                                </div>
                                <video id="my_video_1" class="video-js vjs-sublime-skin" width="100%" height="100%"
      controls preload="none" poster='http://harry.zone/assets/oceans-clip.jpg'
      data-setup='{ "aspectRatio":"750:313", "playbackRates": [0.5, 1, 1.25, 1.5, 2] }'>
    <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
    <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
  </video>
                                <div class="p-2">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-row icons d-flex align-items-center">
                                            <i class="fa fa-heart"></i>
                                            <i class="fa fa-smile-o ml-2"></i>
                                        </div>
                                        <div class="d-flex flex-row muted-color">
                                            <span>2 comments</span>
                                            <span class="ml-2">Share</span>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="d-flex justify-content-between p-2 px-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="images/pictures/faces/2s.png" width="50" class="mr-3 rounded-circle">
                                        <div class="d-flex flex-column ml-2">
                                            <span class="font-weight-bold">Jeanette Sun</span>
                                            <small class="text-primary">Collegues</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-1 ellipsis">
                                        <small class="mr-2">20 mins</small>
                                        <i class="fa fa-ellipsis-h"></i>
                                    </div>
                                </div>
                                <img src="images/pictures/18.jpg" class="img-fluid">
                                <div class="p-2">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-row icons d-flex align-items-center">
                                            <i class="fa fa-heart"></i>
                                            <i class="fa fa-smile-o ml-2"></i>
                                        </div>
                                        <div class="d-flex flex-row muted-color">
                                            <span>2 comments</span>
                                            <span class="ml-2">Share</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="comments">
                                        <div class="d-flex flex-row mb-2">
                                            <img src="https://i.imgur.com/9AZ2QX1.jpg" width="40" class="rounded-image">
                                            <div class="d-flex flex-column ml-2">
                                                <span class="name">Daniel Frozer</span>
                                                <small class="comment-text">I like this alot! thanks alot</small>
                                                <div class="d-flex flex-row align-items-center status">
                                                    <small>Like</small>
                                                    <small>Reply</small>
                                                    <small>Translate</small>
                                                    <small>18 mins</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mb-2">
                                            <img src="https://i.imgur.com/1YrCKa1.jpg" width="40" class="rounded-image">
                                            <div class="d-flex flex-column ml-2">
                                                <span class="name">Elizabeth goodmen</span>
                                                <small class="comment-text">Thanks for sharing!</small>
                                                <div class="d-flex flex-row align-items-center status">
                                                    <small>Like</small>
                                                    <small>Reply</small>
                                                    <small>Translate</small>
                                                    <small>8 mins</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-input">
                                            <input type="text" class="form-control">
                                            <div class="fonts">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <h4>Pemprov DKI Jakarta</h4>
                        <h5>
                            <span>berada</span>
                            di Jakarta, Indonesia
                        
                        
                        
                        
                        
                        </h5>
                        <p>This is the classic content box. You can modify this to any style just by adding classes to it.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <h4>Card Classic Full</h4>
                        <p>This is the classic content box. You can modify this to any style just by adding classes to it.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <h4>Card Classic Full</h4>
                        <p>This is the classic content box. You can modify this to any style just by adding classes to it.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <h4>Card Classic Full</h4>
                        <p>This is the classic content box. You can modify this to any style just by adding classes to it.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <h4>Card Classic Full</h4>
                        <p>This is the classic content box. You can modify this to any style just by adding classes to it.
                        </p>
                    </div>
                </div>
            </div>
            <div class="fab-container">
                <div class="fab fab-icon-holder">
                    <i class="fas fa-question"></i>
                </div>
                <ul class="fab-options">
                    <li>
                        <span class="fab-label">Documentation</span>
                        <div class="fab-icon-holder">
                            <i class="fas fa-file-alt"></i>
                        </div>
                    </li>
                    <li>
                        <span class="fab-label">Video Tutorials</span>
                        <div class="fab-icon-holder">
                            <i class="fas fa-video"></i>
                        </div>
                    </li>
                    <li>
                        <span class="fab-label">Live Chat</span>
                        <div class="fab-icon-holder">
                            <i class="fas fa-comments"></i>
                        </div>
                    </li>
                    <li>
                        <span class="fab-label">Feedback</span>
                        <div class="fab-icon-holder">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="menu-settings" class="menu menu-box-bottom menu-box-full">
                <div class="menu-title mt-0 pt-0">
                    <h1>Settings</h1>
                    <p class="color-highlight">Flexible and Easy to Use</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="list-group list-custom-small">
                        <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
                            <i class="fa font-12 fa-moon rounded-s bg-highlight color-white me-3"></i>
                            <span>Dark Mode</span>
                            <div class="custom-control scale-switch ios-switch">
                                <input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark-mode"/>
                                <label class="custom-control-label" for="switch-dark-mode"></label>
                            </div>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="list-group list-custom-large">
                        <a data-menu="menu-highlights" href="#">
                            <i class="fa font-14 fa-tint bg-green-dark rounded-s"></i>
                            <span>Page Highlight</span>
                            <strong>16 Colors Highlights Included</strong>
                            <span class="badge bg-highlight color-white">HOT</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a data-menu="menu-backgrounds" href="#" class="border-0">
                            <i class="fa font-14 fa-cog bg-blue-dark rounded-s"></i>
                            <span>Background Color</span>
                            <strong>10 Page Gradients Included</strong>
                            <span class="badge bg-highlight color-white">NEW</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title">
                    <h1>Highlights</h1>
                    <p class="color-highlight">Any Element can have a Highlight Color</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="highlight-changer">
                        <a href="#" data-change-highlight="blue">
                            <i class="fa fa-circle color-blue-dark"></i>
                            <span class="color-blue-light">Default</span>
                        </a>
                        <a href="#" data-change-highlight="red">
                            <i class="fa fa-circle color-red-dark"></i>
                            <span class="color-red-light">Red</span>
                        </a>
                        <a href="#" data-change-highlight="orange">
                            <i class="fa fa-circle color-orange-dark"></i>
                            <span class="color-orange-light">Orange</span>
                        </a>
                        <a href="#" data-change-highlight="pink2">
                            <i class="fa fa-circle color-pink2-dark"></i>
                            <span class="color-pink-dark">Pink</span>
                        </a>
                        <a href="#" data-change-highlight="magenta">
                            <i class="fa fa-circle color-magenta-dark"></i>
                            <span class="color-magenta-light">Purple</span>
                        </a>
                        <a href="#" data-change-highlight="aqua">
                            <i class="fa fa-circle color-aqua-dark"></i>
                            <span class="color-aqua-light">Aqua</span>
                        </a>
                        <a href="#" data-change-highlight="teal">
                            <i class="fa fa-circle color-teal-dark"></i>
                            <span class="color-teal-light">Teal</span>
                        </a>
                        <a href="#" data-change-highlight="mint">
                            <i class="fa fa-circle color-mint-dark"></i>
                            <span class="color-mint-light">Mint</span>
                        </a>
                        <a href="#" data-change-highlight="green">
                            <i class="fa fa-circle color-green-light"></i>
                            <span class="color-green-light">Green</span>
                        </a>
                        <a href="#" data-change-highlight="grass">
                            <i class="fa fa-circle color-green-dark"></i>
                            <span class="color-green-dark">Grass</span>
                        </a>
                        <a href="#" data-change-highlight="sunny">
                            <i class="fa fa-circle color-yellow-light"></i>
                            <span class="color-yellow-light">Sunny</span>
                        </a>
                        <a href="#" data-change-highlight="yellow">
                            <i class="fa fa-circle color-yellow-dark"></i>
                            <span class="color-yellow-light">Goldish</span>
                        </a>
                        <a href="#" data-change-highlight="brown">
                            <i class="fa fa-circle color-brown-dark"></i>
                            <span class="color-brown-light">Wood</span>
                        </a>
                        <a href="#" data-change-highlight="night">
                            <i class="fa fa-circle color-dark-dark"></i>
                            <span class="color-dark-light">Night</span>
                        </a>
                        <a href="#" data-change-highlight="dark">
                            <i class="fa fa-circle color-dark-light"></i>
                            <span class="color-dark-light">Dark</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
                </div>
            </div>
            <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title">
                    <h1>Backgrounds</h1>
                    <p class="color-highlight">Change Page Color Behind Content Boxes</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="background-changer">
                        <a href="#" data-change-background="default">
                            <i class="bg-theme"></i>
                            <span class="color-dark-dark">Default</span>
                        </a>
                        <a href="#" data-change-background="plum">
                            <i class="body-plum"></i>
                            <span class="color-plum-dark">Plum</span>
                        </a>
                        <a href="#" data-change-background="magenta">
                            <i class="body-magenta"></i>
                            <span class="color-dark-dark">Magenta</span>
                        </a>
                        <a href="#" data-change-background="dark">
                            <i class="body-dark"></i>
                            <span class="color-dark-dark">Dark</span>
                        </a>
                        <a href="#" data-change-background="violet">
                            <i class="body-violet"></i>
                            <span class="color-violet-dark">Violet</span>
                        </a>
                        <a href="#" data-change-background="red">
                            <i class="body-red"></i>
                            <span class="color-red-dark">Red</span>
                        </a>
                        <a href="#" data-change-background="green">
                            <i class="body-green"></i>
                            <span class="color-green-dark">Green</span>
                        </a>
                        <a href="#" data-change-background="sky">
                            <i class="body-sky"></i>
                            <span class="color-sky-dark">Sky</span>
                        </a>
                        <a href="#" data-change-background="orange">
                            <i class="body-orange"></i>
                            <span class="color-orange-dark">Orange</span>
                        </a>
                        <a href="#" data-change-background="yellow">
                            <i class="body-yellow"></i>
                            <span class="color-yellow-dark">Yellow</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
                </div>
            </div>
            <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title mt-n1">
                    <h1>Share the Love</h1>
                    <p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="content mb-0">
                    <div class="divider mb-0"></div>
                    <div class="list-group list-custom-small list-icon-0">
                        <a href="auto_generated" class="shareToFacebook external-link">
                            <i class="font-18 fab fa-facebook-square color-facebook"></i>
                            <span class="font-13">Facebook</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToTwitter external-link">
                            <i class="font-18 fab fa-twitter-square color-twitter"></i>
                            <span class="font-13">Twitter</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToLinkedIn external-link">
                            <i class="font-18 fab fa-linkedin color-linkedin"></i>
                            <span class="font-13">LinkedIn</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToWhatsApp external-link">
                            <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                            <span class="font-13">WhatsApp</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToMail external-link border-0">
                            <i class="font-18 fa fa-envelope-square color-mail"></i>
                            <span class="font-13">Email</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-wizard-step-1" class="menu menu-box-left" data-menu-height="cover" data-menu-width="cover">
            <div class="card pd-lr card-style bg-transparent shadow-0 mb-0" style="height:100%;">
                <div class="card-top mt-4">
                    <div class="d-flex pb-3 mb-n4">
                        <a href="#" style="width:35px; line-height:35px;" class="me-auto font-600 rounded-l text-center bg-green-dark">1</a>
                        <a href="#" style="width:35px; line-height:35px;" class="m-auto font-600 rounded-l text-center bg-gray-dark">2</a>
                        <a href="#" style="width:35px; line-height:35px;" class="ms-auto font-600 rounded-l text-center bg-gray-dark">3</a>
                    </div>
                    <div class="divider position-absolute start-0 end-0 mt-n2" style="z-index:-1;"></div>
                    <h1 class="pt-4 mt-3">Welcome</h1>
                    <p>
                        This is just a dummy example of the form wizard. You can use any field from the <a href="component-inputs.html">Component Inputs</a>
                        here.

                        
                    
                    </p>
                    <h5>Tell us your Name</h5>
                    <div class="input-style has-borders no-icon validate-field mb-4">
                        <input type="name" class="form-control validate-name" id="form1" placeholder="John">
                        <label for="form1" class="color-highlight disabled">John</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(optional)</em>
                    </div>
                    <h5>Where are you From?</h5>
                    <div class="input-style has-borders no-icon validate-field mb-4">
                        <input type="name" class="form-control validate-name" id="form1" placeholder="Europe">
                        <label for="form1" class="color-highlight disabled">Europe</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(required)</em>
                    </div>
                    <h5>Choose your Age Group</h5>
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="form5" class="color-highlight disabled">Select A Value</label>
                        <select id="form5">
                            <option value="default" disabled selected>Select a Value</option>
                            <option value="1">20 - 25</option>
                            <option value="2">25 - 30</option>
                            <option value="3">30 - 35</option>
                            <option value="4">35 - 40</option>
                            <option value="5">40 - 50</option>
                            <option value="6">50 - 55</option>
                            <option value="7">55 - 60</option>
                            <option value="8">60 - 65</option>
                        </select>
                        <span>
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>
                </div>
                <div class="card-bottom mb-5 pb-3">
                    <a href="#" data-menu="menu-wizard-step-2" class="btn btn-full btn-m  bg-blue-dark font-700 text-uppercase">Next Step</a>
                </div>
            </div>
        </div>
        <div id="menu-wizard-step-2" class="menu menu-box-left" data-menu-height="cover" data-menu-width="cover">
            <div class="card pd-lr card-style bg-transparent shadow-0 mb-0" style="height:100%;">
                <div class="card-top mt-4">
                    <div class="d-flex pb-3 mb-n4">
                        <a href="#" style="width:35px; line-height:35px;" data-menu="menu-wizard-step-1" class="me-auto font-600 text-center rounded-l bg-green-dark">
                            <i class="fa fa-check mx-n1"></i>
                        </a>
                        <a href="#" style="width:35px; line-height:35px;" class="m-auto font-600 text-center rounded-l bg-green-dark">2</a>
                        <a href="#" style="width:35px; line-height:35px;" class="ms-auto font-600 text-center rounded-l bg-gray-dark">3</a>
                    </div>
                    <div class="divider position-absolute start-0 end-0 mt-n2" style="z-index:-1;"></div>
                    <h1 class="pt-4 mt-3">Tell us about the Product?</h1>
                    <p>
                        This is just a dummy example of the form wizard. You can use any field from the <a href="component-inputs.html">Component Inputs</a>
                        here.

                        
                    
                    </p>
                    <h5>What product did you use?</h5>
                    <div class="input-style has-borders no-icon validate-field mb-4">
                        <input type="name" class="form-control validate-name" id="form1a" placeholder="Sticky">
                        <label for="form1a" class="color-highlight disabled">Sticky</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(optional)</em>
                    </div>
                    <h5>Which version did you use?</h5>
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="form5a" class="color-highlight disabled">Select A Value</label>
                        <select id="form5a">
                            <option value="default" disabled selected>Select a Value</option>
                            <option value="1a">v1.0</option>
                            <option value="2a">v2.0</option>
                            <option value="3a">v3.0</option>
                            <option value="4a">v4.0</option>
                            <option value="4a">v4.0</option>
                            <option value="5a">v5.0</option>
                        </select>
                        <span>
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>
                </div>
                <div class="card-bottom mb-5 pb-3">
                    <a href="#" data-menu="menu-wizard-step-3" class="btn btn-full btn-m bg-blue-dark font-700 text-uppercase">Next Step</a>
                </div>
            </div>
        </div>
        <div id="menu-wizard-step-3" class="menu menu-box-left" data-menu-height="cover" data-menu-width="cover">
            <div class="card pd-lr card-style bg-transparent shadow-0 mb-0" style="height:100%;">
                <div class="card-top mt-4">
                    <div class="d-flex pb-3 mb-n4">
                        <a href="#" style="width:35px; line-height:35px;" data-menu="menu-wizard-step-1" class="me-auto font-600 rounded-xl text-center bg-green-dark">
                            <i class="fa fa-check mx-n1"></i>
                        </a>
                        <a href="#" style="width:35px; line-height:35px;" data-menu="menu-wizard-step-2" class="m-auto font-600 rounded-xl text-center bg-green-dark">
                            <i class="fa fa-check mx-n1"></i>
                        </a>
                        <a href="#" style="width:35px; line-height:35px;" class="ms-auto font-600 rounded-xl text-center bg-green-dark">3</a>
                    </div>
                    <div class="divider position-absolute start-0 end-0 mt-n2" style="z-index:-1;"></div>
                    <h1 class="pt-4 mt-3">Would you recommend it?</h1>
                    <p>
                        This is just a dummy example of the form wizard. You can use any field from the <a href="component-inputs.html">Component Inputs</a>
                        here.

                        
                    
                    </p>
                    <h5>Did you enjoy our product?</h5>
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="form5ab" class="color-highlight disabled">Select A Value</label>
                        <select id="form5ab">
                            <option value="default" disabled selected>Select a Value</option>
                            <option value="1ab">Yes</option>
                            <option value="2ab">Not Sure</option>
                            <option value="2ab">No</option>
                        </select>
                        <span>
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>
                    <h5>Would you recommend it?</h5>
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="form5abc" class="color-highlight disabled">Select A Value</label>
                        <select id="form5abc">
                            <option value="default" disabled selected>Select a Value</option>
                            <option value="1abc">Yes</option>
                            <option value="2abc">Not Sure</option>
                            <option value="2abc">No</option>
                        </select>
                        <span>
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>
                    <h5>What did you like most?</h5>
                    <div class="input-style has-borders no-icon mb-4">
                        <label for="form5abcd" class="color-highlight disabled">Select A Value</label>
                        <select id="form5abcd">
                            <option value="default" disabled selected>Select a Value</option>
                            <option value="1abcd">Code Quality</option>
                            <option value="2abcd">Design Quality</option>
                            <option value="3abcd">Feature Availability</option>
                            <option value="4abcd">Author Support</option>
                        </select>
                        <span>
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <i class="fa fa-check disabled invalid color-red-dark"></i>
                        <em></em>
                    </div>
                </div>
                <div class="card-bottom mb-5 pb-3">
                    <a href="#" data-menu="menu-wizard-step-4" class="btn btn-full btn-m bg-blue-dark font-700 text-uppercase">Next Step</a>
                </div>
            </div>
        </div>
        <div id="menu-wizard-step-4" class="menu menu-box-left" data-menu-height="cover" data-menu-width="cover">
            <div class="card pd-lr card-style bg-transparent shadow-0 mb-0" style="height:100%;">
                <div class="card-center text-center">
                    <i class="fa fa-check-circle scale-box color-green-dark fa-5x pb-3"></i>
                    <h1>Thank you!</h1>
                    <p class="px-3 mb-5">We'll get back to you if we need clarifications. Thank you for taking our survay!
</p>
                </div>
                <div class="card-bottom mb-5 pb-3">
                    <a href="#" class="close-menu btn btn-full btn-m  bg-green-dark font-700 text-uppercase">Awesome!</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#lightgallery').lightGallery();
            });
        </script>
        <script src="scripts/lightgallery-all.min.js"></script>
        <script type="text/javascript">
        $(function(){
  var $refreshButton = $('#refresh');
  var $results = $('#css_result');
  
  function refresh(){
    var css = $('style.cp-pen-styles').text();
    $results.html(css);
  }

  refresh();
  $refreshButton.click(refresh);  
  
  $results.click(function(){
    $(this).select();
  });
});
</script>
    </body>
</html>

