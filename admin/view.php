
<?php
    $title = 'Sistem Informasi';
    include 'header.php';
    include 'menus.php';
?>


<div class="nk-main ">
    <div class="nk-wrap ">
        <div class="nk-header nk-header-fixed nk-header-fluid">
            <div class="container-fluid">
                <div class="nk-header-wrap">
                    <div class="nk-menu-trigger d-xl-none ml-n1">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                            <em class="icon ni ni-menu"></em>
                        </a>
                    </div>
                    <div class="nk-header-brand d-xl-none">
                        <a href="/demo7/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="/demo7/images/logo.png" srcset="/demo7/images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="/demo7/images/logo-dark.png" srcset="/demo7/images/logo-dark2x.png 2x" alt="logo-dark">
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
                                                        <img src="/demo7/images/avatar/b-sm.jpg" alt="">
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
                                                            <img src="/demo7/images/avatar/c-sm.jpg" alt="">
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
                                                        <img src="/demo7/images/avatar/a-sm.jpg" alt="">
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
                                                <a href="/demo7/hospital/user-profile.html">
                                                    <em class="icon ni ni-user-alt"></em>
                                                    <span>View Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/demo7/hospital/settings.html">
                                                    <em class="icon ni ni-setting-alt"></em>
                                                    <span>Account Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/demo7/hospital/settings-account-log.html">
                                                    <em class="icon ni ni-activity-alt"></em>
                                                    <span>Login Activity</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li>
                                                <a href="#">
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
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Appointment List</h3>
                                    <div class="nk-block-des text-soft d-none d-md-inline-flex">
                                        <ul class="breadcrumb breadcrumb-pipe">
                                            <li class="breadcrumb-item active">
                                                <a href="#">Today's Total (150)</a>
                                            </li>
                                            <li class="breadcrumb-item ">
                                                <a href="#">Visited (47)</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Waiting (12)</a>
                                            </li>
                                            <li class="breadcrumb-item ">
                                                <a href="#">Canceled (1)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="#" data-toggle="modal" data-target="#addAppointment" class="btn btn-icon btn-primary d-md-none">
                                        <em class="icon ni ni-plus"></em>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#addAppointment" class="btn btn-primary d-none d-md-inline-flex">
                                        <em class="icon ni ni-plus"></em>
                                        <span>Add Appointment</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                                    <div class="card-inner position-relative card-tools-toggle">
                                        <div class="card-title-group">
                                            <div class="card-tools">
                                                <div class="form-inline flex-nowrap gx-3">
                                                    <div class="form-wrap w-150px">
                                                        <select class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                                            <option value="">Bulk Action</option>
                                                            <option value="email">Send Email</option>
                                                            <option value="change">Change Doctor</option>
                                                            <option value="depart">Change Depart</option>
                                                            <option value="delete">Delete</option>
                                                        </select>
                                                    </div>
                                                    <div class="btn-wrap">
                                                                    <span class="d-none d-md-block">
                                                                        <button class="btn btn-dim btn-outline-light disabled">Apply</button>
                                                                    </span>
                                                        <span class="d-md-none">
                                                                        <button class="btn btn-dim btn-outline-light btn-icon disabled">
                                                                            <em class="icon ni ni-arrow-right"></em>
                                                                        </button>
                                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-tools mr-n1">
                                                <ul class="btn-toolbar gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search">
                                                            <em class="icon ni ni-search"></em>
                                                        </a>
                                                    </li>
                                                    <li class="btn-toolbar-sep"></li>
                                                    <li>
                                                        <div class="toggle-wrap">
                                                            <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools">
                                                                <em class="icon ni ni-menu-right"></em>
                                                            </a>
                                                            <div class="toggle-content" data-content="cardTools">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li class="toggle-close">
                                                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools">
                                                                            <em class="icon ni ni-arrow-left"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                                <div class="dot dot-primary"></div>
                                                                                <em class="icon ni ni-filter-alt"></em>
                                                                            </a>
                                                                            <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                                                <div class="dropdown-head">
                                                                                    <span class="sub-title dropdown-title">Filter Appointment</span>
                                                                                    <div class="dropdown">
                                                                                        <a href="#" class="btn btn-sm btn-icon">
                                                                                            <em class="icon ni ni-more-h"></em>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-body dropdown-body-rg">
                                                                                    <div class="row gx-6 gy-3">
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Department</label>
                                                                                                <select class="form-select form-select-sm">
                                                                                                    <option value="any">Any Type</option>
                                                                                                    <option value="medicine">Medicine</option>
                                                                                                    <option value="gastroenterology">Gastroenterology</option>
                                                                                                    <option value="cardiology">Cardiology</option>
                                                                                                    <option value="orthopaedics">Orthopaedics</option>
                                                                                                    <option value="neurology">Neurology</option>
                                                                                                    <option value="urology">Urology</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Status</label>
                                                                                                <select class="form-select form-select-sm">
                                                                                                    <option value="any">Any Status</option>
                                                                                                    <option value="visited">Visited</option>
                                                                                                    <option value="canceled">Canceled</option>
                                                                                                    <option value="waiting">Waiting</option>
                                                                                                    <option value="pending">Pending</option>
                                                                                                    <option value="deleted">Deleted</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Doctor</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <select class="form-select" data-placeholder="Select Doctor">
                                                                                                        <option value="">Select Doctor</option>
                                                                                                        <option value="option_select_consulant">Joe Larson</option>
                                                                                                        <option value="option_select_consulant">Patrick Newman</option>
                                                                                                        <option value="option_select_consulant">Newman Freeman</option>
                                                                                                        <option value="option_select_consulant">Jane Montgomery</option>
                                                                                                        <option value="option_select_consulant">Emma Walker</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Date</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="form-icon form-icon-right">
                                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <button type="button" class="btn btn-secondary">Filter</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-foot between">
                                                                                    <a class="clickable" href="#">Reset Filter</a>
                                                                                    <a href="#">Save Filter</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                                <em class="icon ni ni-setting"></em>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                                <ul class="link-check">
                                                                                    <li>
                                                                                        <span>Show</span>
                                                                                    </li>
                                                                                    <li class="active">
                                                                                        <a href="#">10</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">20</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">50</a>
                                                                                    </li>
                                                                                </ul>
                                                                                <ul class="link-check">
                                                                                    <li>
                                                                                        <span>Order</span>
                                                                                    </li>
                                                                                    <li class="active">
                                                                                        <a href="#">DESC</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">ASC</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-search search-wrap" data-search="search">
                                            <div class="card-body">
                                                <div class="search-content">
                                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search">
                                                        <em class="icon ni ni-arrow-left"></em>
                                                    </a>
                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by patient name or id">
                                                    <button class="search-submit btn btn-icon">
                                                        <em class="icon ni ni-search"></em>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                        <label class="custom-control-label" for="uid"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span>Patient</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-mb">
                                                    <span>Department</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span>Doctor</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span>Serial No</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>Mobile No</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span>Date</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span>Status</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>Created By</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                            </div>


                                            <?php
                                            $table = $_GET['v'];
                                            $data = $user_home->runQuery("SELECT * FROM $table");
                                            $data->execute();
                                            $a = $data->fetchAll();

                                            foreach ($a as $row) {
                                                echo '<div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                        <label class="custom-control-label" for="uid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-primary-dim">
                                                            <span>A</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">'.$row["nama_sekolah"].'</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-mb">
                                                    <span class="tb-lead-sub">Gastroenterology</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-primary-dim">
                                                            <img src="/demo7/images/avatar/a-sm.jpg" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Joe Larson</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span>05</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>+811 847-4958</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-date">18/12/2020</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-status text-info">Waiting</span>
                                                    <span data-toggle="tooltip" title="Waiting at 18 Dec, 2019 01:02 PM" data-placement="top">
                                                                    <em class="icon ni ni-info"></em>
                                                                </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>Janet Snyder</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                                <em class="icon ni ni-eye-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approve">
                                                                <em class="icon ni ni-check-fill-c"></em>
                                                            </a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Reject">
                                                                <em class="icon ni ni-cross-fill-c"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                                                                    <em class="icon ni ni-more-h"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="#" data-toggle="modal" data-target="#editAppointment">
                                                                                <em class="icon ni ni-edit"></em>
                                                                                <span>Edit</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <em class="icon ni ni-trash"></em>
                                                                                <span>Delete</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                                            }
                                            ?>


                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Prev</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                                    <span class="page-link">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </span>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">6</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">7</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="g">
                                                <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page</div>
                                                    <div>
                                                        <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                            <option value="page-1">1</option>
                                                            <option value="page-2">2</option>
                                                            <option value="page-4">4</option>
                                                            <option value="page-5">5</option>
                                                            <option value="page-6">6</option>
                                                            <option value="page-7">7</option>
                                                            <option value="page-8">8</option>
                                                            <option value="page-9">9</option>
                                                            <option value="page-10">10</option>
                                                            <option value="page-11">11</option>
                                                            <option value="page-12">12</option>
                                                            <option value="page-13">13</option>
                                                            <option value="page-14">14</option>
                                                            <option value="page-15">15</option>
                                                            <option value="page-16">16</option>
                                                            <option value="page-17">17</option>
                                                            <option value="page-18">18</option>
                                                            <option value="page-19">19</option>
                                                            <option value="page-20">20</option>
                                                        </select>
                                                    </div>
                                                    <div>OF 102</div>
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
    </div>
</div>
<?php include 'footer.php'; ?>
