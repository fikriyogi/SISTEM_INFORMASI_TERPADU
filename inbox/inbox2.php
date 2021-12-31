<?php
session_start();
$root = dirname(__DIR__, 1);

     
require_once $root . '/class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) {
    $user_home->redirect('index.php');
} else {
    $stmt = $user_home->runQuery("SELECT * FROM tbl_users, ds_identitas, warga WHERE userID=? AND app_id=? AND warga.nik=?");
    $stmt->execute([$_SESSION['userSession'], $_SESSION['app_id'], $_SESSION['nik']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $app_name = $row['nama'];
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
        <link rel="shortcut icon" href="/demo7/images/favicon.png">
        <title>Messages - Support Ticket | DashLite Admin Template</title>
        <link rel="stylesheet" href="<?php echo SITE_URL;?>public/assets/css/dashlite.css?ver=2.9.0">
        <link id="skin-default" rel="stylesheet" href="<?php echo SITE_URL;?>public/assets/css/theme.css?ver=2.9.0">
    </head>
    <body class="nk-body ui-rounder npc-apps apps-only has-sidebar npc-apps-messages">
        <div class="nk-app-root">
            <div class="nk-sidebar-overlay" data-content="sidebarMenu">
                <div class="nk-sidebar-bar is-light">
                    <div class="nk-apps-brand">
                        <a href="/demo7/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="/demo7/images/logo-small.png" srcset="/demo7/images/logo-small2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="/demo7/images/logo-dark-small.png" srcset="/demo7/images/logo-dark-small2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-sidebar-element">
                        <div class="nk-sidebar-body">
                            <div class="nk-sidebar-content" data-simplebar>
                                <div class="nk-sidebar-menu">
                                    <ul class="nk-menu apps-menu">
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-plus-medi"></em>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item active">
                                            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-dashboard"></em>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-menu-circled"></em>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPages">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-files"></em>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navMisc">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-server"></em>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navError">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-alert-c"></em>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-hr"></li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navComponents">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-layers"></em>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nk-sidebar-footer">
                                    <ul class="nk-menu nk-menu-md apps-menu">
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link" title="Settings">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-setting"></em>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                                <a href="#" data-toggle="dropdown" data-offset="50,-50">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md ml-4">
                                    <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text text-soft">info@softnio.com</span>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-sidebar-main is-light">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <div class="nk-menu-content" data-content="navHospital">
                            <h5 class="title">Hospital Manegment</h5>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="/demo7/hospital/index.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-dashboard-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/hospital/appointment.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-note-add-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Appointment List</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-users-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Patient</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/patient-add.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Add Patient</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/patient-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">IPD / OPD Patients</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/patient-profile.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Patient Profile</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-plus-medi-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Doctors / Nurses</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/doctor-nurse-add.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Add Doctor / Nurses</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/doctor-nurse-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Doctors / Nurses</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-coin-alt-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Finance</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/income-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Income</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/expense-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Expense</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/invoice-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Invoice List</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/invoice-details.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Invoice Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-activity-round-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Monitor Hospital</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/birth-report.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Birth Report</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/blood-bank.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Blood Bank</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/inventory-items.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Inventory Items Reports</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-panel-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Misc Pages</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/bed-group.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Bed Group</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/bed-allotment.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Bed Allotment</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/department.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Department</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/hospital/death-report.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Death Report</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/hospital/user-profile.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-user-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">User Profile</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/hospital/general-settings.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-setting-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Setting</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-menu-content menu-active" data-content="navDashboards">
                            <h5 class="title">Dashboards</h5>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="/demo7/index.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-dashboard-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Default Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/index-ecommerce.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-bag-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Ecommerce Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/index-sales.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-bag-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Sales Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/index-analytics.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-growth-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Analytics Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-menu-content" data-content="navApps">
                            <h5 class="title">Apps</h5>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="/demo7/apps-inbox.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-inbox-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Mailbox</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/apps-messages.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-chat-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Messages</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/apps-file-manager.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-folder-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">File Manager</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/apps-chats.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-chat-circle-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Chats</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/apps-calendar.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-calender-date-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Calendar</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/apps-kanban.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-template-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Kanban Board</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-menu-content" data-content="navPages">
                            <h5 class="title">Pages</h5>
                            <ul class="nk-menu">
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-tile-thumb-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Projects</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/project-card.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Project Cards</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/project-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Project List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-users-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">User Manage</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/user-list-regular.html" class="nk-menu-link">
                                                <span class="nk-menu-text">User List - Regular</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/user-list-compact.html" class="nk-menu-link">
                                                <span class="nk-menu-text">User List - Compact</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/user-details-regular.html" class="nk-menu-link">
                                                <span class="nk-menu-text">User Details - Regular</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/user-profile-regular.html" class="nk-menu-link">
                                                <span class="nk-menu-text">User Profile - Regular</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/user-card.html" class="nk-menu-link">
                                                <span class="nk-menu-text">User Contact - Card</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-cart-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Ecommerce Pages</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/products.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Product List</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/orders-regular.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Order List - Regular</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/orders-sales.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Order List - Sales</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/invoice-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Invoices List</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/invoice-details.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Invoice Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-list-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Products</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/product-list.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Product List</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/product-card.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Product Card</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/product-details.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Product Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pricing-table.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-view-col-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Pricing Table</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/gallery.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-img-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Image Gallery</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/_blank.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-file-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Blank / Startup</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/faqs.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-file-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Faqs / Help</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/terms-policy.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-file-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Terms / Policy</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/regular-v1.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-file-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Regular Page - v1</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/regular-v2.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-file-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Regular Page - v2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-menu-content" data-content="navMisc">
                            <h5 class="title">Misc Pages</h5>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/auths/auth-login.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-text">Login / Signin</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/auths/auth-register.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-text">Register / Signup</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-text">Forgot Password</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/auths/auth-success.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-text">Success / Confirm</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item no-icon">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Classic Version - v2</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Login / Signin</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Register / Signup</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Forgot Password</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Success / Confirm</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item no-icon">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">No Slider Version - v3</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Login / Signin</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Register / Signup</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Forgot Password</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank">
                                                <span class="nk-menu-text">Success / Confirm</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-menu-content" data-content="navError">
                            <h5 class="title">Error Pages</h5>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/errors/404-classic.html" target="_blank" class="nk-menu-link">
                                        <span class="nk-menu-text">404 Classic</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/errors/504-classic.html" target="_blank" class="nk-menu-link">
                                        <span class="nk-menu-text">504 Classic</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/errors/404-s1.html" target="_blank" class="nk-menu-link">
                                        <span class="nk-menu-text">404 Modern</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/pages/errors/504-s1.html" target="_blank" class="nk-menu-link">
                                        <span class="nk-menu-text">504 Modern</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-menu-content" data-content="navComponents">
                            <h5 class="title">Components</h5>
                            <ul class="nk-menu">
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-layers-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Ui Elements</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Component List</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/alerts.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Alerts</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/accordions.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Accordions</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/avatar.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Avatar</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/badges.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Badges</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/buttons.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/buttons-group.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Button Group</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/breadcrumb.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Breadcrumb</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/cards.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Cards</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/carousel.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Carousel</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/list-dropdown.html" class="nk-menu-link">
                                                <span class="nk-menu-text">List Dropdown
                                        </span < /a></li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/modals.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Modals</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/pagination.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Pagination</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/popover.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Popovers</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/progress.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Progress</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/spinner.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Spinner</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/tabs.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Tabs</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/toast.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Toasts</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/tooltip.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Tooltip</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/elements/typography.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Typography</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Utilities</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-border.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Border</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-colors.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Colors</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-display.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Display</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-embeded.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Embeded</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-flex.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Flex</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-text.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Text</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-sizing.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Sizing</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-spacing.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Spacing</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/elements/util-others.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Others</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-dot-box-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Crafted Icons</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/svg-icons.html" class="nk-menu-link">
                                                <span class="nk-menu-text">SVG Icon - Exclusive</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/nioicon.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Nioicon - HandCrafted</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/components/misc/icons.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-menu-circled"></em>
                                        </span>
                                        <span class="nk-menu-text">Icon Libraries</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-table-view-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Tables</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/tables/table-basic.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Basic Tables</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/tables/table-special.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Special Tables</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/tables/table-datatable.html" class="nk-menu-link">
                                                <span class="nk-menu-text">DataTables</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-todo-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Forms</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/form-elements.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Form Elements</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/checkbox-radio.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Checkbox Radio</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/advanced-controls.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Advanced Controls</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/input-group.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Input Group</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/form-upload.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Form Upload</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/datetime-picker.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Date &amp;Time Picker</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/number-spinner.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Number Spinner</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/nouislider.html" class="nk-menu-link">
                                                <span class="nk-menu-text">noUiSlider</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/form-layouts.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Form Layouts</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/form-validation.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Form Validation</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/forms/form-wizard.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Wizard Basic</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Rich Editor</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/forms/form-summernote.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Summernote</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/forms/form-quill.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Quill</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo7/components/forms/form-tinymce.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Tinymce</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-pie-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Charts</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/charts/chartjs.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Chart JS</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/charts/knob.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Knob JS</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-puzzle"></em>
                                        </span>
                                        <span class="nk-menu-text">Widgets</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/widgets/cards.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Card Widgets</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/widgets/charts.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Chart Widgets</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/widgets/ratings.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Rating Widgets</span>
                                                <span class="nk-menu-badge">New</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-block-over"></em>
                                        </span>
                                        <span class="nk-menu-text">Miscellaneous</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/slick-sliders.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Slick Slider</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/toastr.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Toastr</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/sweet-alert.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Sweet Alert</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/js-tree.html" class="nk-menu-link">
                                                <span class="nk-menu-text">jsTree</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/dual-listbox.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Dual Listbox</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/dragula.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Dragula</span>
                                                <span class="nk-menu-badge">New</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/demo7/components/misc/map.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Google Map</span>
                                                <span class="nk-menu-badge">New</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/demo7/email-templates.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-template-fill"></em>
                                        </span>
                                        <span class="nk-menu-text">Email Template</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-main ">
                <div class="nk-wrap-overlay ">
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
                                                <h3 class="nk-block-title page-title">Messages</h3>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <ul class="nk-block-tools g-3">
                                                    <li>
                                                        <a href="#" class="btn btn-primary" data-toggle="dropdown">
                                                            <em class="icon ni ni-plus"></em>
                                                            <span>New</span>
                                                        </a>
                                                    </li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-white btn-light btn-icon" data-toggle="dropdown">
                                                                <em class="icon ni ni-setting"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <span>Notification Settings</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span>Message Setting</span>
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
                                    <div class="nk-msg">
                                        <div class="nk-msg-aside">
                                            <div class="nk-msg-nav">
                                                <ul class="nk-msg-menu">
                                                    <li class="nk-msg-menu-item active">
                                                        <a href="">Active</a>
                                                    </li>
                                                    <li class="nk-msg-menu-item">
                                                        <a href="">Closed</a>
                                                    </li>
                                                    <li class="nk-msg-menu-item">
                                                        <a href="">Stared</a>
                                                    </li>
                                                    <li class="nk-msg-menu-item">
                                                        <a href="">All</a>
                                                    </li>
                                                    <li class="nk-msg-menu-item ml-auto">
                                                        <a href="" class="search-toggle toggle-search" data-target="search">
                                                            <em class="icon ni ni-search"></em>
                                                        </a>
                                                    </li>
                                                </ul>
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
                                            <div class="nk-msg-list" data-simplebar>
                                                <div class="nk-msg-item current" data-msg-id="1">
                                                    <div class="nk-msg-media user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Abu Bin Ishtiyak</div>
                                                                <div class="lable-tag dot bg-pink"></div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="attchment">
                                                                    <em class="icon ni ni-clip-h"></em>
                                                                </div>
                                                                <div class="date">12 Jan</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Unable to select currency when order.</h6>
                                                                <p>Hello team, I am facing problem as i can not select currency on buy order page.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="2">
                                                    <div class="nk-msg-media user-avatar">
                                                        <img src="/demo7/images/avatar/b-sm.jpg" alt="">
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Jackelyn Dugas</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">15 Jan</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Have not received bitcoin yet.</h6>
                                                                <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a class="active" href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item is-unread" data-msg-id="3">
                                                    <div class="nk-msg-media user-avatar bg-purple">
                                                        <span>MJ</span>
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Mayme Johnston</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">11 Jan</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">I can not submit kyc application</h6>
                                                                <p>Hello support! I can not upload my documents on kyc application.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="unread">
                                                                    <span class="badge badge-primary">2</span>
                                                                </div>
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="133">
                                                    <div class="nk-msg-media user-avatar">
                                                        <img src="/demo7/images/avatar/c-sm.jpg" alt="">
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Jake Smityh</div>
                                                                <div class="lable-tag dot bg-pink"></div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">30 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Have not received bitcoin yet.</h6>
                                                                <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="12">
                                                    <div class="nk-msg-media user-avatar">
                                                        <img src="/demo7/images/avatar/d-sm.jpg" alt="">
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Amanda Moore</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">28 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Wallet needs to verify.</h6>
                                                                <p>Hello, I already varified my Wallet but it still showing needs to verify alert.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="1">
                                                    <div class="nk-msg-media user-avatar bg-blue">
                                                        <span>RV</span>
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Rebecca Valdez</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">26 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">I want my money back.</h6>
                                                                <p>Hey! I don't want to stay as your subscriber any more, Also i want my mony back.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="1">
                                                    <div class="nk-msg-media user-avatar bg-orange">
                                                        <span>CG</span>
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Charles Greene</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">21 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Have not received bitcoin yet.</h6>
                                                                <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="1">
                                                    <div class="nk-msg-media user-avatar bg-success">
                                                        <span>EA</span>
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Ethan Anderson</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">16 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Unable to select currency when order.</h6>
                                                                <p>Hello team, I am facing problem as i can not select currency on buy order page.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="1">
                                                    <div class="nk-msg-media user-avatar">
                                                        <img src="/demo7/images/avatar/c-sm.jpg" alt="">
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Jose Peterson</div>
                                                                <div class="lable-tag dot bg-pink"></div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">14 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Have not received bitcoin yet.</h6>
                                                                <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="12">
                                                    <div class="nk-msg-media user-avatar">
                                                        <img src="/demo7/images/avatar/d-sm.jpg" alt="">
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Amanda Moore</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">12 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">Wallet needs to verify.</h6>
                                                                <p>Hello, I already varified my Wallet but it still showing needs to verify alert.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-item" data-msg-id="3">
                                                    <div class="nk-msg-media user-avatar bg-purple">
                                                        <span>MJ</span>
                                                    </div>
                                                    <div class="nk-msg-info">
                                                        <div class="nk-msg-from">
                                                            <div class="nk-msg-sender">
                                                                <div class="name">Mayme Johnston</div>
                                                            </div>
                                                            <div class="nk-msg-meta">
                                                                <div class="date">09 Dec, 2019</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-msg-context">
                                                            <div class="nk-msg-text">
                                                                <h6 class="title">I can not submit kyc application</h6>
                                                                <p>Hello support! I can not upload my documents on kyc application.</p>
                                                            </div>
                                                            <div class="nk-msg-lables">
                                                                <div class="asterisk">
                                                                    <a href="#">
                                                                        <em class="asterisk-off icon ni ni-star"></em>
                                                                        <em class="asterisk-on icon ni ni-star-fill"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-msg-body bg-white profile-shown">
                                            <div class="nk-msg-head">
                                                <h4 class="title d-none d-lg-block">Unable to select currency when order</h4>
                                                <div class="nk-msg-head-meta">
                                                    <div class="d-none d-lg-block">
                                                        <ul class="nk-msg-tags">
                                                            <li>
                                                                <span class="label-tag">
                                                                    <em class="icon ni ni-flag-fill"></em>
                                                                    <span>Technical Problem</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="d-lg-none">
                                                        <a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1">
                                                            <em class="icon ni ni-arrow-left"></em>
                                                        </a>
                                                    </div>
                                                    <ul class="nk-msg-actions">
                                                        <li>
                                                            <a href="#" class="btn btn-dim btn-sm btn-outline-light">
                                                                <em class="icon ni ni-check"></em>
                                                                <span>Mark as Closed</span>
                                                            </a>
                                                        </li>
                                                        <li class="d-lg-none">
                                                            <a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle">
                                                                <em class="icon ni ni-info-i"></em>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-user-add"></em>
                                                                            <span>Assign To Member</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-archive"></em>
                                                                            <span>Move to Archive</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-done"></em>
                                                                            <span>Mark as Close</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="nk-msg-profile-toggle profile-toggle active">
                                                    <em class="icon ni ni-arrow-left"></em>
                                                </a>
                                            </div>
                                            <div class="nk-msg-reply nk-reply" data-simplebar>
                                                <div class="nk-msg-head py-4 d-lg-none">
                                                    <h4 class="title">Unable to select currency when order</h4>
                                                    <ul class="nk-msg-tags">
                                                        <li>
                                                            <span class="label-tag">
                                                                <em class="icon ni ni-flag-fill"></em>
                                                                <span>Technical Problem</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-reply-item">
                                                    <div class="nk-reply-header">
                                                        <div class="user-card">
                                                            <div class="user-avatar sm bg-blue">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-name">Abu Bin Ishtiyak</div>
                                                        </div>
                                                        <div class="date-time">14 Jan, 2020</div>
                                                    </div>
                                                    <div class="nk-reply-body">
                                                        <div class="nk-reply-entry entry">
                                                            <p>Hello team,</p>
                                                            <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                                            <p>
                                                                Thank you <br>Ishityak
                                                            </p>
                                                        </div>
                                                        <div class="attach-files">
                                                            <ul class="attach-list">
                                                                <li class="attach-item">
                                                                    <a class="download" href="#">
                                                                        <em class="icon ni ni-img"></em>
                                                                        <span>error-show-On-order.jpg</span>
                                                                    </a>
                                                                </li>
                                                                <li class="attach-item">
                                                                    <a class="download" href="#">
                                                                        <em class="icon ni ni-img"></em>
                                                                        <span>full-page-error.jpg</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="attach-foot">
                                                                <span class="attach-info">2 files attached</span>
                                                                <a class="attach-download link" href="#">
                                                                    <em class="icon ni ni-download"></em>
                                                                    <span>Download All</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-reply-item">
                                                    <div class="nk-reply-header">
                                                        <div class="user-card">
                                                            <div class="user-avatar sm bg-pink">
                                                                <span>ST</span>
                                                            </div>
                                                            <div class="user-name">
                                                                Support Team <span>(You)</span>
                                                            </div>
                                                        </div>
                                                        <div class="date-time">14 Jan, 2020</div>
                                                    </div>
                                                    <div class="nk-reply-body">
                                                        <div class="nk-reply-entry entry">
                                                            <p>Hello Ishtiyak,</p>
                                                            <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                                                            <p>Thank you very much. </p>
                                                        </div>
                                                        <div class="nk-reply-from">
                                                            Replied by <span>Iliash Hossain</span>
                                                            at 11:32 AM 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-reply-meta">
                                                    <div class="nk-reply-meta-info">
                                                        <span class="who">Iliash Hossian</span>
                                                        assigned user: <span class="whom">Saiful Islam</span>
                                                        at 14 Jan, 2020 at 11:34 AM
                                                    </div>
                                                </div>
                                                <div class="nk-reply-item">
                                                    <div class="nk-reply-header">
                                                        <div class="user-card">
                                                            <div class="user-avatar sm bg-purple">
                                                                <span>IH</span>
                                                            </div>
                                                            <div class="user-name">
                                                                Iliash Hossain <span>added a note</span>
                                                            </div>
                                                        </div>
                                                        <div class="date-time">14 Jan, 2020</div>
                                                    </div>
                                                    <div class="nk-reply-body">
                                                        <div class="nk-reply-entry entry note">
                                                            <p>Devement Team need to check out the issues.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-reply-meta">
                                                    <div class="nk-reply-meta-info">
                                                        <strong>15 January 2020</strong>
                                                    </div>
                                                </div>
                                                <div class="nk-reply-item">
                                                    <div class="nk-reply-header">
                                                        <div class="user-card">
                                                            <div class="user-avatar sm bg-pink">
                                                                <span>ST</span>
                                                            </div>
                                                            <div class="user-name">
                                                                Support Team <span>(You)</span>
                                                            </div>
                                                        </div>
                                                        <div class="date-time">15 Jan, 2020</div>
                                                    </div>
                                                    <div class="nk-reply-body">
                                                        <div class="nk-reply-entry entry">
                                                            <p>Hello Ishtiyak,</p>
                                                            <p>Thanks for waiting for us. Our team solved the issues. So check now on our website. Hopefuly you can order now.</p>
                                                            <p>Thank you very much once again.</p>
                                                        </div>
                                                        <div class="nk-reply-from">
                                                            Replied by <span>Noor Parvez</span>
                                                            at 11:32 AM 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-reply-form">
                                                    <div class="nk-reply-form-header">
                                                        <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#reply-form">Reply</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#note-form">Private Note</a>
                                                            </li>
                                                        </ul>
                                                        <div class="nk-reply-form-title">
                                                            <div class="title">Reply as:</div>
                                                            <div class="user-avatar xs bg-purple">
                                                                <span>IH</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="reply-form">
                                                            <div class="nk-reply-form-editor">
                                                                <div class="nk-reply-form-field">
                                                                    <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                                                </div>
                                                                <div class="nk-reply-form-tools">
                                                                    <ul class="nk-reply-form-actions g-1">
                                                                        <li class="mr-2">
                                                                            <button class="btn btn-primary" type="submit">Reply</button>
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
                                                                        <li>
                                                                            <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#">
                                                                                <em class="icon ni ni-happy"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#">
                                                                                <em class="icon ni ni-img"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="note-form">
                                                            <div class="nk-reply-form-editor">
                                                                <div class="nk-reply-form-field">
                                                                    <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                                                                </div>
                                                                <div class="nk-reply-form-tools">
                                                                    <ul class="nk-reply-form-actions g-1">
                                                                        <li class="mr-2">
                                                                            <button class="btn btn-primary" type="submit">Add Note</button>
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#">
                                                                                <em class="icon ni ni-clip-v"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-msg-profile visible" data-simplebar>
                                                <div class="card">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner">
                                                            <div class="user-card user-card-s2 mb-2">
                                                                <div class="user-avatar md bg-primary">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <h5>Abu Bin Ishtiyak</h5>
                                                                    <span class="sub-text">Customer</span>
                                                                </div>
                                                                <div class="user-card-menu dropdown">
                                                                    <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <em class="icon ni ni-eye"></em>
                                                                                    <span>View Profile</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <em class="icon ni ni-na"></em>
                                                                                    <span>Ban From System</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <em class="icon ni ni-repeat"></em>
                                                                                    <span>View Orders</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center g-1">
                                                                <div class="col-4">
                                                                    <div class="profile-stats">
                                                                        <span class="amount">23</span>
                                                                        <span class="sub-text">Total Order</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="profile-stats">
                                                                        <span class="amount">20</span>
                                                                        <span class="sub-text">Complete</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="profile-stats">
                                                                        <span class="amount">3</span>
                                                                        <span class="sub-text">Progress</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <div class="aside-wg">
                                                                <h6 class="overline-title-alt mb-2">User Information</h6>
                                                                <ul class="user-contacts">
                                                                    <li>
                                                                        <em class="icon ni ni-mail"></em>
                                                                        <span>info@softnio.com</span>
                                                                    </li>
                                                                    <li>
                                                                        <em class="icon ni ni-call"></em>
                                                                        <span>+938392939</span>
                                                                    </li>
                                                                    <li>
                                                                        <em class="icon ni ni-map-pin"></em>
                                                                        <span>
                                                                            1134 Ridder Park Road <br>San Fransisco, CA 94851
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="aside-wg">
                                                                <h6 class="overline-title-alt mb-2">Additional</h6>
                                                                <div class="row gx-1 gy-3">
                                                                    <div class="col-6">
                                                                        <span class="sub-text">Ref ID: </span>
                                                                        <span>TID-049583</span>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <span class="sub-text">Requested:</span>
                                                                        <span>Abu Bin Ishtiak</span>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <span class="sub-text">Status:</span>
                                                                        <span class="lead-text text-success">Open</span>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <span class="sub-text">Last Reply:</span>
                                                                        <span>Abu Bin Ishtiak</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="aside-wg">
                                                                <h6 class="overline-title-alt mb-2">Assigned Account</h6>
                                                                <ul class="align-center g-2">
                                                                    <li>
                                                                        <div class="user-avatar bg-purple">
                                                                            <span>IH</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="user-avatar bg-pink">
                                                                            <span>ST</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="user-avatar bg-gray">
                                                                            <span>SI</span>
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
        <script src="<?php echo SITE_URL;?>public/assets/js/bundle.js?ver=2.9.0"></script>
        <script src="<?php echo SITE_URL;?>public/assets/js/scripts.js?ver=2.9.0"></script>
        <script src="<?php echo SITE_URL;?>public/assets/js/demo-settings.js?ver=2.9.0"></script>
        <script src="<?php echo SITE_URL;?>public/assets/js/apps/messages.js?ver=2.9.0"></script>
    </body>
</html>
