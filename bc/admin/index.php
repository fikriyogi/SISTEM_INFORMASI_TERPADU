
<?php 
    $title = 'Sistem Informasi';
    include 'header.php';
    include 'menus.php'; 
?>
<div class="nk-main ">
    <!-- id="testDiv" -->
    <div class="nk-wrap " >
        <div class="nk-header nk-header-fixed nk-header-fluid">
            <div class="container-fluid">
                <div class="nk-header-wrap">
                    <div class="nk-menu-trigger d-xl-none ml-n1">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                            <em class="icon ni ni-menu"></em>
                        </a>
                    </div>
                    <div class="nk-header-brand d-xl-none">
                        <a href="index.html" class="logo-link">
                            <img class="logo-light logo-img" src="<?php echo SITE_URL;?>public/images/logo.png" srcset="<?php echo SITE_URL;?>public/images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="<?php echo SITE_URL;?>public/images/logo-dark.png" srcset="<?php echo SITE_URL;?>public/images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-header-search ml-3 ml-xl-0">
                        <em class="icon ni ni-search"></em>
                        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                    </div>
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                            <li class="dropdown chats-dropdown hide-mb-xs">
                                <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="icon-status icon-status-na">
                                        <em class="icon ni ni-comments"></em>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                    <div class="dropdown-head">
                                        <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                        <a href="#">Setting</a>
                                    </div>
                                    <div class="dropdown-body">
                                        <ul class="chat-list">
                                            <li class="chat-item">
                                                <a class="chat-link" href="#">
                                                    <div class="chat-media user-avatar">
                                                        <span>IH</span>
                                                        <span class="status dot dot-lg dot-gray"></span>
                                                    </div>
                                                    <div class="chat-info">
                                                        <div class="chat-from">
                                                            <div class="name">Iliash Hossain</div>
                                                            <span class="time">Now</span>
                                                        </div>
                                                        <div class="chat-context">
                                                            <div class="text">You: Please confrim if you got my last messages.</div>
                                                            <div class="status delivered">
                                                                <em class="icon ni ni-check-circle-fill"></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="chat-item is-unread">
                                                <a class="chat-link" href="#">
                                                    <div class="chat-media user-avatar bg-pink">
                                                        <span>AB</span>
                                                        <span class="status dot dot-lg dot-success"></span>
                                                    </div>
                                                    <div class="chat-info">
                                                        <div class="chat-from">
                                                            <div class="name">Abu Bin Ishtiyak</div>
                                                            <span class="time">4:49 AM</span>
                                                        </div>
                                                        <div class="chat-context">
                                                            <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                            <div class="status unread">
                                                                <em class="icon ni ni-bullet-fill"></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="chat-item">
                                                <a class="chat-link" href="#">
                                                    <div class="chat-media user-avatar">
                                                        <img src="<?php echo SITE_URL;?>public/images/avatar/b-sm.jpg" alt="">
                                                    </div>
                                                    <div class="chat-info">
                                                        <div class="chat-from">
                                                            <div class="name">George Philips</div>
                                                            <span class="time">6 Apr</span>
                                                        </div>
                                                        <div class="chat-context">
                                                            <div class="text">Have you seens the claim from Rose?</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="chat-item">
                                                <a class="chat-link" href="#">
                                                    <div class="chat-media user-avatar user-avatar-multiple">
                                                        <div class="user-avatar">
                                                            <img src="<?php echo SITE_URL;?>public/images/avatar/c-sm.jpg" alt="">
                                                        </div>
                                                        <div class="user-avatar">
                                                            <span>AB</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-info">
                                                        <div class="chat-from">
                                                            <div class="name">Softnio Group</div>
                                                            <span class="time">27 Mar</span>
                                                        </div>
                                                        <div class="chat-context">
                                                            <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                            <div class="status sent">
                                                                <em class="icon ni ni-check-circle"></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="chat-item">
                                                <a class="chat-link" href="#">
                                                    <div class="chat-media user-avatar">
                                                        <img src="<?php echo SITE_URL;?>public/images/avatar/a-sm.jpg" alt="">
                                                        <span class="status dot dot-lg dot-success"></span>
                                                    </div>
                                                    <div class="chat-info">
                                                        <div class="chat-from">
                                                            <div class="name">Larry Hughes</div>
                                                            <span class="time">3 Apr</span>
                                                        </div>
                                                        <div class="chat-context">
                                                            <div class="text">Hi Frank! How is you doing?</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="chat-item">
                                                <a class="chat-link" href="#">
                                                    <div class="chat-media user-avatar bg-purple">
                                                        <span>TW</span>
                                                    </div>
                                                    <div class="chat-info">
                                                        <div class="chat-from">
                                                            <div class="name">Tammy Wilson</div>
                                                            <span class="time">27 Mar</span>
                                                        </div>
                                                        <div class="chat-context">
                                                            <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                            <div class="status sent">
                                                                <em class="icon ni ni-check-circle"></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-foot center">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown notification-dropdown">
                                <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="icon-status icon-status-info">
                                        <em class="icon ni ni-bell"></em>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                    <div class="dropdown-head">
                                        <span class="sub-title nk-dropdown-title">Notifications</span>
                                        <a href="#">Mark All as Read</a>
                                    </div>
                                    <div class="dropdown-body">
                                        <div class="nk-notification">
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">
                                                        You have requested to <span>Widthdrawl</span>
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">
                                                        Your <span>Deposit Order</span>
                                                        is placed
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">
                                                        You have requested to <span>Widthdrawl</span>
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">
                                                        Your <span>Deposit Order</span>
                                                        is placed
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">
                                                        You have requested to <span>Widthdrawl</span>
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">
                                                        Your <span>Deposit Order</span>
                                                        is placed
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-foot center">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown user-dropdown">
                                <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                    <div class="user-toggle">
                                        <div class="user-avatar sm">
                                            <em class="icon ni ni-user-alt"></em>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <div class="dropdown-inner user-card-wrap bg-lighter">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li>
                                                <a href="hospital/user-profile.html">
                                                    <em class="icon ni ni-user-alt"></em>
                                                    <span>View Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="hospital/settings.html">
                                                    <em class="icon ni ni-setting-alt"></em>
                                                    <span>Account Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="hospital/settings-account-log.html">
                                                    <em class="icon ni ni-activity-alt"></em>
                                                    <span>Login Activity</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li>
                                                <a href="<?php echo SITE_URL;?>logout.php">
                                                    <em class="icon ni ni-signout"></em>
                                                    <span>Sign out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Dashboard</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Welcome <?php echo $menu; ?>.</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu">
                                            <em class="icon ni ni-more-v"></em>
                                        </a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown">
                                                            <em class="d-none d-sm-inline icon ni ni-calender-date"></em>
                                                            <span>
                                                                <span class="d-none d-md-inline">Last</span>
                                                                30 Days
                                                            </span>
                                                            <em class="dd-indc icon ni ni-chevron-right"></em>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#">
                                                                        <span>Last 30 Days</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <span>Last 6 Months</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <span>Last 1 Years</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt">
                                                    <a href="#" class="btn btn-primary">
                                                        <em class="icon ni ni-reports"></em>
                                                        <span>Reports</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-gs">
                                <div class="col-lg-5 col-xl-4">
                                    <div class="nk-block">
                                        <div class="nk-block-head-xs">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title title">Overview</h5>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="card card-bordered text-light is-dark h-100">
                                                <div class="card-inner">
                                                    <div class="nk-wg7">
                                                        <div class="nk-wg7-stats">
                                                            <div class="nk-wg7-title">TOTAL PENDUDUK</div>
                                                            <div class="number-lg amount"><?= $user_home->count('warga','','','') ;?></div>
                                                        </div>
                                                        <div class="nk-wg7-stats-group">
                                                            <div class="nk-wg7-stats w-50">
                                                                <div class="nk-wg7-title">LAKI-LAKI</div>
                                                                <div class="number-lg"><?= $user_home->count('warga','jk','L','') ;?></div>
                                                            </div>
                                                            <div class="nk-wg7-stats w-50">
                                                                <div class="nk-wg7-title">PEREMPUAN</div>
                                                                <div class="number-lg"><?= $user_home->count('warga','jk','P','') ;?></div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">
                                                                        Last activity at <span>19 Nov, 2019</span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-xl-8">
                                    <div class="nk-block">
                                        <div class="nk-block-head-xs">
                                            <div class="nk-block-between-md g-2">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title">Statistik</h5>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <a href="/demo5/crypto/wallets.html" class="link link-primary">See All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-sm-4">
                                                <div class="card bg-light">
                                                    <div class="nk-wgw sm">
                                                        <a class="nk-wgw-inner" href="view.php?v=<?='ds_identitas'?>">
                                                            <div class="nk-wgw-name">
                                                                <div class="nk-wgw-icon">
                                                                    <em class="icon ni ni-sign-btc"></em>
                                                                </div>
                                                                <h5 class="nk-wgw-title title">DESA</h5>
                                                            </div>
                                                            <div class="nk-wgw-balance">
                                                                <div class="amount">
                                                                    <?= $user_home->count('ds_identitas','','','') ;?></span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card bg-light">
                                                    <div class="nk-wgw sm">
                                                        <a class="nk-wgw-inner" href="view.php?v=<?='ds_dusun'?>">
                                                            <div class="nk-wgw-name">
                                                                <div class="nk-wgw-icon">
                                                                    <em class="icon ni ni-sign-btc"></em>
                                                                </div>
                                                                <h5 class="nk-wgw-title title">DUSUN</h5>
                                                            </div>
                                                            <div class="nk-wgw-balance">
                                                                <div class="amount">
                                                                    <?= $user_home->hitung('warga','dusun') ;?></span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card bg-light">
                                                    <div class="nk-wgw sm">
                                                        <a class="nk-wgw-inner" href="/demo5/crypto/wallet-bitcoin.html">
                                                            <div class="nk-wgw-name">
                                                                <div class="nk-wgw-icon">
                                                                    <em class="icon ni ni-sign-eth"></em>
                                                                </div>
                                                                <h5 class="nk-wgw-title title">RT / RW</h5>
                                                            </div>
                                                            <div class="nk-wgw-balance">
                                                                <div class="amount">
                                                                    0.000560<span class="currency currency-eth">ETH</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block nk-block-md">
                                        <div class="nk-block-head-xs">
                                            <div class="nk-block-between-md g-2">
                                                <div class="nk-block-head-content">
                                                    <h6 class="nk-block-title title">STRUKTUR ELEMEN</h6>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <a href="/demo5/crypto/wallets.html" class="link link-primary">See All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-sm-4">
                                                <div class="card bg-light">
                                                    <div class="nk-wgw sm">
                                                        <a class="nk-wgw-inner" href="view.php?v=rs_identitas">
                                                            <div class="nk-wgw-name">
                                                                <div class="nk-wgw-icon">
                                                                    <em class="icon ni ni-sign-btc"></em>
                                                                </div>
                                                                <h5 class="nk-wgw-title title">RUMAH SAKIT</h5>
                                                            </div>
                                                            <div class="nk-wgw-balance">
                                                                <div class="amount">
                                                                    <?= $user_home->count('rs_identitas','','','') ?>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card bg-light">
                                                    <div class="nk-wgw sm">
                                                        <a class="nk-wgw-inner" href="/demo5/crypto/wallet-bitcoin.html">
                                                            <div class="nk-wgw-name">
                                                                <div class="nk-wgw-icon">
                                                                    <em class="icon ni ni-sign-btc"></em>
                                                                </div>
                                                                <h5 class="nk-wgw-title title">PUSKESMAS</h5>
                                                            </div>
                                                            <div class="nk-wgw-balance">
                                                                <div class="amount">
                                                                    4.434953<span class="currency currency-btc">BTC</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card bg-light">
                                                    <div class="nk-wgw sm">
                                                        <a class="nk-wgw-inner" href="view.php?v=sc_sekolah">
                                                            <div class="nk-wgw-name">
                                                                <div class="nk-wgw-icon">
                                                                    <em class="icon ni ni-sign-eth"></em>
                                                                </div>
                                                                <h5 class="nk-wgw-title title">SEKOLAH</h5>
                                                            </div>
                                                            <div class="nk-wgw-balance">
                                                                <div class="amount">
                                                                    <?= $user_home->count('sc_sekolah','','','') ?>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Penduduk</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount"><?= $user_home->count('warga','','',''); ?></div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3" id="ipdIncome"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="change up text-danger">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            4.63%
                                                        </span>
                                                        <span>vs. last week</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Desa</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount"><?= $user_home->count('ds_identitas','','',''); ?></div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3" id="opdIncome"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="change down text-danger">
                                                            <em class="icon ni ni-arrow-long-down"></em>
                                                            2.34%
                                                        </span>
                                                        <span>vs. last week</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title ">
                                                        <h6 class="title">Total Rumah Sakit</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount"><?= $user_home->count('rs_identitas','','',''); ?></div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3" id="labIncome"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="change up text-danger">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            4.63%
                                                        </span>
                                                        <span>vs. last week</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Sekolah</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount"><?= $user_home->count('sc_sekolah','','',''); ?></div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3" id="todayExpense"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="change up text-primary">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            1.34%
                                                        </span>
                                                        <span>vs. last week</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <div class="card-title-group mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Hospital Statistics</h6>
                                                </div>
                                            </div>
                                            <ul class="nk-store-statistics">
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Todays' Appointment</div>
                                                        <div class="count">470</div>
                                                    </div>
                                                    <em class="icon ni bg-blue-dim ni-list-index-fill"></em>
                                                </li>
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Doctors</div>
                                                        <div class="count">152</div>
                                                    </div>
                                                    <em class="icon bg-primary-dim ni ni-plus-medi"></em>
                                                </li>
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Patients</div>
                                                        <div class="count">2,327</div>
                                                    </div>
                                                    <em class="icon bg-info-dim ni ni-users"></em>
                                                </li>
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Nurses</div>
                                                        <div class="count">674</div>
                                                    </div>
                                                    <em class="icon bg-pink-dim ni ni ni-plus-fill-c"></em>
                                                </li>
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Department</div>
                                                        <div class="count">12</div>
                                                    </div>
                                                    <em class="icon bg-purple-dim ni ni-network"></em>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3">
                                    <div class="card card-bordered h-100">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start pb-3 g-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Revenue</h6>
                                                    <p>In 30 days income of this hospital.</p>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="card-hint icon ni ni-help" data-toggle="tooltip" data-placement="left" title="Revenue of this month"></em>
                                                </div>
                                            </div>
                                            <div class="analytic-au">
                                                <div class="analytic-data-group analytic-au-group g-3">
                                                    <div class="analytic-data analytic-au-data">
                                                        <div class="title">Monthly</div>
                                                        <div class="amount">98K</div>
                                                        <div class="change up">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            4.63%
                                                        </div>
                                                    </div>
                                                    <div class="analytic-data analytic-au-data">
                                                        <div class="title">Weekly</div>
                                                        <div class="amount">9.69K</div>
                                                        <div class="change down">
                                                            <em class="icon ni ni-arrow-long-down"></em>
                                                            1.92%
                                                        </div>
                                                    </div>
                                                    <div class="analytic-data analytic-au-data">
                                                        <div class="title">Daily (Avg)</div>
                                                        <div class="amount">3.94K</div>
                                                        <div class="change up">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            3.45%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="analytic-au-ck">
                                                    <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                                                </div>
                                                <div class="chart-label-group">
                                                    <div class="chart-label">01 Jan, 2020</div>
                                                    <div class="chart-label">30 Jan, 2020</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xxl-6">
                                    <div class="card card-bordered h-100">
                                        <div class="card-inner">
                                            <div class="card-title-group pb-3 g-2">
                                                <div class="card-title">
                                                    <h6 class="title">Income vs Expenses</h6>
                                                    <p>Last 30 days Income vs Expenses Statistics.</p>
                                                </div>
                                                <div class="card-tools shrink-0 d-none d-sm-block">
                                                    <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">7 D</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link active">1 M</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">3 M</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="analytic-ov">
                                                <div class="analytic-data-group analytic-ov-group g-3">
                                                    <div class="analytic-data analytic-ov-data">
                                                        <div class="title">Month</div>
                                                        <div class="amount">12.57K</div>
                                                        <div class="change up">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            12.37%
                                                        </div>
                                                    </div>
                                                    <div class="analytic-data analytic-ov-data">
                                                        <div class="title">Week</div>
                                                        <div class="amount">3.98K</div>
                                                        <div class="change up">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            47.74%
                                                        </div>
                                                    </div>
                                                    <div class="analytic-data analytic-ov-data">
                                                        <div class="title">Month</div>
                                                        <div class="amount">4.49K</div>
                                                        <div class="change up">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            12.37%
                                                        </div>
                                                    </div>
                                                    <div class="analytic-data analytic-ov-data">
                                                        <div class="title">Week</div>
                                                        <div class="amount">1.15K</div>
                                                        <div class="change down">
                                                            <em class="icon ni ni-arrow-long-down"></em>
                                                            0.35%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="analytic-ov-ck">
                                                    <canvas class="analytics-line-large" id="analyticOvData"></canvas>
                                                </div>
                                                <div class="chart-label-group ml-5">
                                                    <div class="chart-label">01 Jan, 2020</div>
                                                    <div class="chart-label d-none d-sm-block">15 Jan, 2020</div>
                                                    <div class="chart-label">30 Jan, 2020</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-4">
                                    <div class="card card-bordered card-full">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">New Patients</h6>
                                                    </div>
                                                    <div class="card-tools">
                                                        <a href="#" class="link">View All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner card-inner-md">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary-dim">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-setting"></em>
                                                                            <span>Action Settings</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-notify"></em>
                                                                            <span>Push Notification</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner card-inner-md">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-pink-dim">
                                                        <span>SW</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Sharon Walker</span>
                                                        <span class="sub-text">sharon-90@example.com</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-setting"></em>
                                                                            <span>Action Settings</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-notify"></em>
                                                                            <span>Push Notification</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner card-inner-md">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning-dim">
                                                        <span>GO</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Gloria Oliver</span>
                                                        <span class="sub-text">gloria_72@example.com</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-setting"></em>
                                                                            <span>Action Settings</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-notify"></em>
                                                                            <span>Push Notification</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner card-inner-md">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-success-dim">
                                                        <span>PS</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Phillip Sullivan</span>
                                                        <span class="sub-text">phillip-85@example.com</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-setting"></em>
                                                                            <span>Action Settings</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-notify"></em>
                                                                            <span>Push Notification</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-4">
                                    <div class="card card-bordered h-100">
                                        <div class="card-inner border-bottom">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Support Requests</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <a href="#" class="link">View All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nk-support">
                                            <li class="nk-support-item">
                                                <div class="user-avatar">
                                                    <img src="<?php echo SITE_URL;?>public/images/avatar/a-sm.jpg" alt="">
                                                </div>
                                                <div class="nk-support-content">
                                                    <div class="title">
                                                        <span>Vincent Lopez</span>
                                                        <span class="badge badge-dot badge-dot-xs badge-warning ml-1">Pending</span>
                                                    </div>
                                                    <p>Thanks for contact us with your issues...</p>
                                                    <span class="time">6 min ago</span>
                                                </div>
                                            </li>
                                            <li class="nk-support-item">
                                                <div class="user-avatar bg-purple-dim">
                                                    <span>DM</span>
                                                </div>
                                                <div class="nk-support-content">
                                                    <div class="title">
                                                        <span>Daniel Moore</span>
                                                        <span class="badge badge-dot badge-dot-xs badge-info ml-1">Open</span>
                                                    </div>
                                                    <p>Thanks for contact us with your issues...</p>
                                                    <span class="time">2 Hours ago</span>
                                                </div>
                                            </li>
                                            <li class="nk-support-item">
                                                <div class="user-avatar">
                                                    <img src="<?php echo SITE_URL;?>public/images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="nk-support-content">
                                                    <div class="title">
                                                        <span>Larry Henry</span>
                                                        <span class="badge badge-dot badge-dot-xs badge-success ml-1">Solved</span>
                                                    </div>
                                                    <p>Thanks for contact us with your issues...</p>
                                                    <span class="time">3 Hours ago</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-4">
                                    <div class="card card-bordered h-100">
                                        <div class="card-inner border-bottom">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Notifications</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <a href="#" class="link">View All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <div class="timeline">
                                                <h6 class="timeline-head">November, 2019</h6>
                                                <?php
                                                $data = $user_home->runQuery("SELECT * FROM tb_notice LIMIT 5");
                                                $data->execute();
                                                $a = $data->fetchAll();
                                                ?>

                                                <ul class="timeline-list">
                                                    <?php
                                                    $no = 1;
                                                    foreach($a as $row)
                                                    {
                                                        echo '
                                                    <li class="timeline-item" id="notification">
                                                        <div class="timeline-status bg-primary is-outline"></div>
                                                        <div class="timeline-date">
                                                            '.date("d-M",strtotime($row['date_note'])).' <em class="icon ni ni-alarm-alt"></em>
                                                        </div>
                                                        <div class="timeline-data">
                                                            <h6 class="timeline-title"><a href="#" class="" data-toggle="modal" data-target="#editPersonal">'.$row['notice'].'</a></h6>
                                                            <div class="timeline-des">
                                                                <p>Re-check tets results asap.</p>
                                                                <span class="time">09:30am</span>
                                                            </div>
                                                        </div>
                                                    </li>';
                                                    } ?>
                                                </ul>
                                            </div>

                                            <?php include('modal.html'); ?>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
        