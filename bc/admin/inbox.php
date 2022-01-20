
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
                            <li class="nav-item">
                                <a href="#" data-toggle="modal" data-target="#region" class="nk-quick-nav-icon">
                                    <em class="icon ni ni-globe"></em>
                                </a>
                            </li>
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
                                                <a class="chat-link" href="/demo7/apps-chats.html">
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
                                                <a class="chat-link" href="/demo7/apps-chats.html">
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
                                                <a class="chat-link" href="/demo7/apps-chats.html">
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
                                                <a class="chat-link" href="/demo7/apps-chats.html">
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
                                                <a class="chat-link" href="/demo7/apps-chats.html">
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
                                                <a class="chat-link" href="/demo7/apps-chats.html">
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
                                        <a href="/demo7/apps-chats.html">View All</a>
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
                            <li class="dropdown language-dropdown d-none d-sm-block mr-n1">
                                <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="user-avatar xs">
                                        <img src="/demo7/images/flags/english-sq.png" alt="">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-s1">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="/demo7/images/flags/english.png" alt="" class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="/demo7/images/flags/spanish.png" alt="" class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="/demo7/images/flags/french.png" alt="" class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="/demo7/images/flags/turkey.png" alt="" class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
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
                                                <a href="/demo7/user-profile-regular.html">
                                                    <em class="icon ni ni-user-alt"></em>
                                                    <span>View Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/demo7/user-profile-setting.html">
                                                    <em class="icon ni ni-setting-alt"></em>
                                                    <span>Account Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/demo7/user-profile-activity.html">
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
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">NioMail</h3>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#compose-mail">
                                                <em class="icon ni ni-plus"></em>
                                                <span>Compose</span>
                                            </a>
                                        </li>
                                        <li class="nk-block-tools-opt d-lg-none">
                                            <a href="#" class="btn btn-white btn-light btn-icon toggle" data-target="inbox-aside">
                                                <em class="icon ni ni-menu-alt-r"></em>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nk-ibx">
                            <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                                <div class="nk-ibx-head">
                                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#compose-mail">
                                        <em class="icon ni ni-plus"></em>
                                        <span>Compose</span>
                                    </a>
                                </div>
                                <div class="nk-ibx-nav" data-simplebar>
                                    <ul class="nk-ibx-menu">
                                        <li class="active">
                                            <a class="nk-ibx-menu-item" href="#">
                                                <em class="icon ni ni-inbox"></em>
                                                <span class="nk-ibx-menu-text">Inbox</span>
                                                <span class="badge badge-pill badge-primary">8</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nk-ibx-menu-item" href="#">
                                                <em class="icon ni ni-edit"></em>
                                                <span class="nk-ibx-menu-text">Draft</span>
                                                <span class="badge badge-pill badge-light">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nk-ibx-menu-item" href="#">
                                                <em class="icon ni ni-star"></em>
                                                <span class="nk-ibx-menu-text">Favourite</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nk-ibx-menu-item" href="#">
                                                <em class="icon ni ni-send"></em>
                                                <span class="nk-ibx-menu-text">Sent</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nk-ibx-menu-item" href="#">
                                                <em class="icon ni ni-report"></em>
                                                <span class="nk-ibx-menu-text">Spam</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nk-ibx-menu-item" href="#">
                                                <em class="icon ni ni-trash"></em>
                                                <span class="nk-ibx-menu-text">Trash</span>
                                                <span class="badge badge-pill badge-danger badge-dim">8</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nk-ibx-menu-item" href="#">
                                                <em class="icon ni ni-emails"></em>
                                                <span class="nk-ibx-menu-text">All Mails</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="nk-ibx-nav-head">
                                        <h6 class="title">Label</h6>
                                        <a class="link" href="#">
                                            <em class="icon ni ni-plus-c"></em>
                                        </a>
                                    </div>
                                    <ul class="nk-ibx-label">
                                        <li>
                                            <a href="#">
                                                <span class="nk-ibx-label-dot dot dot-xl dot-label bg-primary"></span>
                                                <span class="nk-ibx-label-text">Business</span>
                                            </a>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <em class="icon ni ni-more-v"></em>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#">
                                                                <span>Edit Label</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Remove Label</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Label Color</span>
                                                            </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                    <ul class="link-check">
                                                        <li>
                                                            <a href="#">Show if unread</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Hide</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="nk-ibx-label-dot dot dot-xl dot-label bg-danger"></span>
                                                <span class="nk-ibx-label-text">Personal</span>
                                            </a>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <em class="icon ni ni-more-v"></em>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#">
                                                                <span>Edit Label</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Remove Label</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Label Color</span>
                                                            </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                    <ul class="link-check">
                                                        <li>
                                                            <a href="#">If unread</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Hide</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="nk-ibx-label-dot dot dot-xl dot-label bg-success"></span>
                                                <span class="nk-ibx-label-text">Social</span>
                                            </a>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <em class="icon ni ni-more-v"></em>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#">
                                                                <span>Edit Label</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Remove Label</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Label Color</span>
                                                            </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                    <ul class="link-check">
                                                        <li>
                                                            <a href="#">Show if unread</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Hide</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-ibx-body bg-white">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <div class="nk-ibx-head-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionAll">
                                                <label class="custom-control-label" for="conversionAll"></label>
                                            </div>
                                        </div>
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li>
                                                <a href="#" class="btn btn-icon btn-trigger">
                                                    <em class="icon ni ni-undo"></em>
                                                </a>
                                            </li>
                                            <li class="d-none d-sm-block">
                                                <a href="#" class="btn btn-icon btn-trigger">
                                                    <em class="icon ni ni-archived"></em>
                                                </a>
                                            </li>
                                            <li class="d-none d-sm-block">
                                                <a href="#" class="btn btn-icon btn-trigger">
                                                    <em class="icon ni ni-trash"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                                                        <em class="icon ni ni-more-v"></em>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <em class="icon ni ni-eye"></em>
                                                                    <span>Move to</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <em class="icon ni ni-trash"></em>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <em class="icon ni ni-archived"></em>
                                                                    <span>Archive</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li>
                                                <a href="#" class="btn btn-trigger btn-icon btn-tooltip" title="Prev Page">
                                                    <em class="icon ni ni-arrow-left"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-trigger btn-icon btn-tooltip" title="Next Page">
                                                    <em class="icon ni ni-arrow-right"></em>
                                                </a>
                                            </li>
                                            <li class="mr-n1">
                                                <a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search">
                                                    <em class="icon ni ni-search"></em>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="search-wrap" data-search="search">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search">
                                                <em class="icon ni ni-arrow-left"></em>
                                            </a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                            <button class="search-submit btn btn-icon">
                                                <em class="icon ni ni-search"></em>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-ibx-list">
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem01">
                                                <label class="custom-control-label" for="conversionItem01"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="/demo7/images/avatar/a-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Abu Bin Ishtiyak</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Can we help you set up email forwording?</span>
                                                                    We’ve noticed you haven’t set up email forward
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:00 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item is-unread">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem02">
                                                <label class="custom-control-label" for="conversionItem02"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a class="active" href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="/demo7/images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Ricardo Salazar</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context-badges">
                                                    <span class="badge badge-primary">Feedback</span>
                                                </div>
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Can we help you set up email forwording?</span>
                                                                    We’ve noticed you haven’t set up email forward
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                            <a class="link link-light">
                                                <em class="icon ni ni-clip-h"></em>
                                            </a>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:00 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item is-unread">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                <label class="custom-control-label" for="conversionItem03"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>LH</span>
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Larry Hughes</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Individual Modal and Alert Design.</span>
                                                                    Please use the attached file for modal.
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem04">
                                                <label class="custom-control-label" for="conversionItem04"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a class="active" href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="/demo7/images/avatar/c-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Laura Matthews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context-badges">
                                                    <span class="badge badge-success">Social</span>
                                                </div>
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Laravel Developer - Interview List</span>
                                                                    https://docs.google.com/document/d/12oOKEs4qjMlUiHXNVjHJBK
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem05">
                                                <label class="custom-control-label" for="conversionItem05"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a class="active" href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="/demo7/images/avatar/d-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Tammy Wilson</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">TokenWiz - New Page</span>
                                                                    here are the 2 screens I would to implement with TokenWiz
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item is-unread">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem06">
                                                <label class="custom-control-label" for="conversionItem06"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a class="active" href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar bg-azure">
                                                    <span>SP</span>
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Sara Phillips</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">TokenLite Promo Assets</span>
                                                                    Please check out attached.
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                            <a class="link link-light">
                                                <em class="icon ni ni-clip-h"></em>
                                            </a>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem07">
                                                <label class="custom-control-label" for="conversionItem07"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar bg-indigo">
                                                    <span>MA</span>
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Mildred Arnold</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Token Page Content.</span>
                                                                    Please check included links for content.
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem08">
                                                <label class="custom-control-label" for="conversionItem08"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar bg-success">
                                                    <img src="/demo7/images/avatar/a-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Abu Bin Ishtiyak</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context-badges">
                                                    <span class="badge badge-danger">Personal</span>
                                                </div>
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Feedback about licenses and support policy</span>
                                                                    Two important aspects of the marketplace are its licenses, which govern the use of your items by customers
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem09">
                                                <label class="custom-control-label" for="conversionItem09"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a class="active" href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="/demo7/images/avatar/d-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Tammy Wilson</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context-badges">
                                                    <span class="badge badge-info">Team</span>
                                                </div>
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Thanks for completing our survey</span>
                                                                    Since you've already completed our survey we wanted to give you the opportunity to win as well
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem10">
                                                <label class="custom-control-label" for="conversionItem10"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="/demo7/images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Ricardo Salazar</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Registration Confirmation for Envato Worldwide</span>
                                                                    The event organizer has provided the following information
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                            <a class="link link-light">
                                                <em class="icon ni ni-clip-h"></em>
                                            </a>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem11">
                                                <label class="custom-control-label" for="conversionItem11"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar bg-pink">
                                                    <span>CL</span>
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Catherine Larson</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Bring personality to your design work.</span>
                                                                    As designers, how we tell our stories is key. We must be unique, genuine, and use language with purpose to get meaningful results in our design work.
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                            <a class="link link-light">
                                                <em class="icon ni ni-clip-h"></em>
                                            </a>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                                    <div class="nk-ibx-item">
                                        <a href="/demo7/apps-inbox-details.html" class="nk-ibx-link"></a>
                                        <div class="nk-ibx-item-elem nk-ibx-item-check">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem12">
                                                <label class="custom-control-label" for="conversionItem12"></label>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-star">
                                            <div class="asterisk">
                                                <a href="#">
                                                    <em class="asterisk-off icon ni ni-star"></em>
                                                    <em class="asterisk-on icon ni ni-star-fill"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-user">
                                            <div class="user-card">
                                                <div class="user-avatar bg-azure">
                                                    <span>SP</span>
                                                </div>
                                                <div class="user-name">
                                                    <div class="lead-text">Sara Phillips</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Unique design portfolio examples.</span>
                                                                    Prepare to be blown away with our favourite unique design portfolio examples built
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-attach"></div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-time">
                                            <div class="sub-text">10:30 AM</div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                            <div class="ibx-actions">
                                                <ul class="ibx-actions-hidden gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive">
                                                            <em class="icon ni ni-archived"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="ibx-actions-visible gx-2">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <em class="icon ni ni-archived"></em>
                                                                            <span>Archive</span>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="compose-mail">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Compose Message</h6>
                    <a href="#" class="close" data-dismiss="modal">
                        <em class="icon ni ni-cross-sm"></em>
                    </a>
                </div>
                <div class="modal-body p-0">
                    <div class="nk-reply-form-header">
                        <div class="nk-reply-form-group">
                            <div class="nk-reply-form-input-group">
                                <div class="nk-reply-form-input nk-reply-form-input-to">
                                    <label class="label">To</label>
                                    <input type="text" class="input-mail tagify" placeholder="Recipient" data-whitelist="team@softnio.com, help@softnio.com, contact@softnio.com">
                                </div>
                                <div class="nk-reply-form-input nk-reply-form-input-cc" data-content="mail-cc">
                                    <label class="label">Cc</label>
                                    <input type="text" class="input-mail tagify">
                                    <a href="#" class="toggle-opt" data-target="mail-cc">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                </div>
                                <div class="nk-reply-form-input nk-reply-form-input-bcc" data-content="mail-bcc">
                                    <label class="label">Bcc</label>
                                    <input type="text" class="input-mail tagify">
                                    <a href="#" class="toggle-opt" data-target="mail-bcc">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                </div>
                            </div>
                            <ul class="nk-reply-form-nav">
                                <li>
                                    <a tabindex="-1" class="toggle-opt" data-target="mail-cc" href="#">CC</a>
                                </li>
                                <li>
                                    <a tabindex="-1" class="toggle-opt" data-target="mail-bcc" href="#">BCC</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-reply-form-editor">
                        <div class="nk-reply-form-field">
                            <input type="text" class="form-control form-control-simple" placeholder="Subject">
                        </div>
                        <div class="nk-reply-form-field">
                            <textarea class="form-control form-control-simple no-resize ex-large" placeholder="Hello"></textarea>
                        </div>
                    </div>
                    <div class="nk-reply-form-tools">
                        <ul class="nk-reply-form-actions g-1">
                            <li class="mr-2">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#">
                                        <em class="icon ni ni-hash"></em>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="link-list-opt no-bdr link-list-template">
                                            <li class="opt-head">
                                                <span>Quick Insert</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Thank you message</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Your issues solved</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Thank you message</span>
                                                </a>
                                            </li>
                                            <li class="divider">
                                            <li>
                                                <a href="#">
                                                    <em class="icon ni ni-file-plus"></em>
                                                    <span>Save as Template</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <em class="icon ni ni-notes-alt"></em>
                                                    <span>Manage Template</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#">
                                    <em class="icon ni ni-clip-v"></em>
                                </a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#">
                                    <em class="icon ni ni-happy"></em>
                                </a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#">
                                    <em class="icon ni ni-img"></em>
                                </a>
                            </li>
                        </ul>
                        <ul class="nk-reply-form-actions g-1">
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn-trigger btn btn-icon" data-toggle="dropdown">
                                        <em class="icon ni ni-more-v"></em>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li>
                                                <a href="#">
                                                    <span>Another Option</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>More Option</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="btn-trigger btn btn-icon mr-n2">
                                    <em class="icon ni ni-trash"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">
                                            Canada <small>(English)</small>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="/demo7/images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
        