
<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-bar">
        <div class="nk-apps-brand">
            <a href="index.html" class="logo-link">
                <img class="logo-light logo-img" src="<?php echo SITE_URL;?>public/images/logo-small.png" srcset="<?php echo SITE_URL;?>public/images/logo-small2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="<?php echo SITE_URL;?>public/images/logo-dark-small.png" srcset="<?php echo SITE_URL;?>public/images/logo-dark-small2x.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-sidebar-element">
            <div class="nk-sidebar-body">
                <div class="nk-sidebar-content" data-simplebar>
                    <div class="nk-sidebar-menu">
                        <ul class="nk-menu apps-menu">
                            <li class="nk-menu-item active">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-plus-medi"></em>
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
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
                                    <span class="sub-text text-soft"><?php echo $row['userEmail'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li>
                                    <a href="user-profile.html">
                                        <em class="icon ni ni-user-alt"></em>
                                        <span>View Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html">
                                        <em class="icon ni ni-setting-alt"></em>
                                        <span>Account Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html">
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
                </div>
            </div>
        </div>
    </div>
    <div class="nk-sidebar-main is-light">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content menu-active" data-content="navHospital">
                <h5 class="title"><?php echo $app_name; ?></h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="hospital/index.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-dashboard-fill"></em>
                            </span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="hospital/appointment.html" class="nk-menu-link">
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
                                <a href="hospital/patient-add.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Add Patient</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/patient-list.html" class="nk-menu-link">
                                    <span class="nk-menu-text">IPD / OPD Patients</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/patient-profile.html" class="nk-menu-link">
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
                                <a href="hospital/doctor-nurse-add.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Add Doctor / Nurses</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/doctor-nurse-list.html" class="nk-menu-link">
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
                                <a href="hospital/income-list.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Income</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/expense-list.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Expense</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/invoice-list.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Invoice List</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/invoice-details.html" class="nk-menu-link">
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
                                <a href="hospital/birth-report.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Birth Report</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/blood-bank.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Blood Bank</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/inventory-items.html" class="nk-menu-link">
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
                                <a href="hospital/bed-group.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Bed Group</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/bed-allotment.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Bed Allotment</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/department.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Department</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="hospital/death-report.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Death Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="hospital/user-profile.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-user-fill"></em>
                            </span>
                            <span class="nk-menu-text">User Profile</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="hospital/settings.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-setting-fill"></em>
                            </span>
                            <span class="nk-menu-text">Setting</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nk-menu-content" data-content="navDashboards">
                <h5 class="title">Dashboards</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="index.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-dashboard-fill"></em>
                            </span>
                            <span class="nk-menu-text">Default Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="index-ecommerce.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-bag-fill"></em>
                            </span>
                            <span class="nk-menu-text">Ecommerce Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="index-sales.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-bag-fill"></em>
                            </span>
                            <span class="nk-menu-text">Sales Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="index-analytics.html" class="nk-menu-link">
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
                        <a href="apps-inbox.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-inbox-fill"></em>
                            </span>
                            <span class="nk-menu-text">Mailbox</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="apps-messages.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-chat-fill"></em>
                            </span>
                            <span class="nk-menu-text">Messages</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="apps-file-manager.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-folder-fill"></em>
                            </span>
                            <span class="nk-menu-text">File Manager</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="apps-chats.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-chat-circle-fill"></em>
                            </span>
                            <span class="nk-menu-text">Chats</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="apps-calendar.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-calender-date-fill"></em>
                            </span>
                            <span class="nk-menu-text">Calendar</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="apps-kanban.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-template-fill"></em>
                            </span>
                            <span class="nk-menu-text">Kanban Board</span>
                            <span class="nk-menu-badge badge-warning">New</span>
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
                                <a href="project-card.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Project Cards</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="project-list.html" class="nk-menu-link">
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
                                <a href="user-list-regular.html" class="nk-menu-link">
                                    <span class="nk-menu-text">User List - Regular</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="user-list-compact.html" class="nk-menu-link">
                                    <span class="nk-menu-text">User List - Compact</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="user-details-regular.html" class="nk-menu-link">
                                    <span class="nk-menu-text">User Details - Regular</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="user-profile-regular.html" class="nk-menu-link">
                                    <span class="nk-menu-text">User Profile - Regular</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="user-card.html" class="nk-menu-link">
                                    <span class="nk-menu-text">User Contact - Card</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
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
                                <a href="products.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Product List</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="orders-regular.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Order List - Regular</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="orders-sales.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Order List - Sales</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="invoice-list.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Invoices List</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="invoice-details.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Invoice Details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="_blank.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-file-fill"></em>
                            </span>
                            <span class="nk-menu-text">Blank / Startup</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/faqs.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-file-fill"></em>
                            </span>
                            <span class="nk-menu-text">Faqs / Help</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/terms-policy.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-file-fill"></em>
                            </span>
                            <span class="nk-menu-text">Terms / Policy</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/regular-v1.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-file-fill"></em>
                            </span>
                            <span class="nk-menu-text">Regular Page - v1</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/regular-v2.html" class="nk-menu-link">
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
                        <a href="pages/auths/auth-login.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Login / Signin</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/auths/auth-register.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Register / Signup</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/auths/auth-reset.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Forgot Password</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/auths/auth-success.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Success / Confirm</span>
                        </a>
                    </li>
                    <li class="nk-menu-item no-icon">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Classic Version - v2</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank">
                                    <span class="nk-menu-text">Login / Signin</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank">
                                    <span class="nk-menu-text">Register / Signup</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank">
                                    <span class="nk-menu-text">Forgot Password</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank">
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
                                <a href="pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank">
                                    <span class="nk-menu-text">Login / Signin</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank">
                                    <span class="nk-menu-text">Register / Signup</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank">
                                    <span class="nk-menu-text">Forgot Password</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank">
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
                        <a href="pages/errors/404-classic.html" target="_blank" class="nk-menu-link">
                            <span class="nk-menu-text">404 Classic</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/errors/504-classic.html" target="_blank" class="nk-menu-link">
                            <span class="nk-menu-text">504 Classic</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/errors/404-s1.html" target="_blank" class="nk-menu-link">
                            <span class="nk-menu-text">404 Modern</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pages/errors/504-s1.html" target="_blank" class="nk-menu-link">
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
                                <a href="components.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Component List</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/alerts.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/accordions.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Accordions</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/avatar.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Avatar</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/badges.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Badges</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/buttons.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/buttons-group.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Button Group</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/breadcrumb.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/cards.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Cards</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/carousel.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Carousel</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/list-dropdown.html" class="nk-menu-link">
                                    <span class="nk-menu-text">List Dropdown</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/modals.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Modals</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/pagination.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Pagination</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/popover.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Popovers</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/progress.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Progress</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/spinner.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Spinner</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/tabs.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Tabs</span>
                                    <span class="nk-menu-badge badge-warning">Updated</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/toast.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Toasts</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/tooltip.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Tooltip</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/elements/typography.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Typography</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-text">Utilities</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-border.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Border</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-colors.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Colors</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-display.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Display</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-embeded.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Embeded</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-flex.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Flex</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-text.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Text</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-sizing.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Sizing</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-spacing.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Spacing</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/elements/util-others.html" class="nk-menu-link">
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
                                <a href="components/misc/svg-icons.html" class="nk-menu-link">
                                    <span class="nk-menu-text">SVG Icon - Exclusive</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/misc/nioicon.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Nioicon - HandCrafted</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="components/misc/icons.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-menu-circled"></em>
                            </span>
                            <span class="nk-menu-text">Icon Libraries</span>
                            <span class="nk-menu-badge badge-warning">New</span>
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
                                <a href="components/tables/table-basic.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Basic Tables</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/tables/table-special.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Special Tables</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/tables/table-datatable.html" class="nk-menu-link">
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
                                <a href="components/forms/form-elements.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Form Elements</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/forms/form-upload.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Form Upload</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/forms/datetime-picker.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Date &amp;Time Picker</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/forms/number-spinner.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Number Spinner</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/forms/form-layouts.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Form Layouts</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/forms/form-validation.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Form Validation</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/forms/form-wizard.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Wizard Basic</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-text">Rich Editor</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="components/forms/form-summernote.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Summernote</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/forms/form-quill.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Quill</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="components/forms/form-tinymce.html" class="nk-menu-link">
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
                                <a href="components/charts/chartjs.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Chart JS</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/charts/knob.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Knob JS</span>
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
                                <a href="components/misc/toastr.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Toastr</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/misc/sweet-alert.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/misc/js-tree.html" class="nk-menu-link">
                                    <span class="nk-menu-text">jsTree</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="components/misc/dual-listbox.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Dual Listbox</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="email-templates.html" class="nk-menu-link">
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