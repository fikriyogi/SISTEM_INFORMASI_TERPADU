
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
                                                <span><?= $user_home->get_initial($row['userName']);?> </span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text"><?= $row['userName']?></span>
                                                <span class="sub-text"><?= $row['userEmail']?></span>
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
        <div class="nk-content">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Add Patient</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Input new Patient information carefully.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Personal Info</h5>
                                                <p>Add common infomation like Name, Email etc</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="full-name">ID</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  id="id" name="id" value="<?= $user_home->create_id('id_pasien', 'rs_pasien', $_SESSION['app_id']) ?>" placeholder="Full Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="full-name">NIK</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  onkeyup="isi_otomatis()" id="nik" placeholder="Full Name" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="full-name">Nama</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  id="nama" placeholder="Full Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Date of Birth</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" id="tgl_lahir" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Gender</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Gender">
                                                                <option value="">Select Gender</option>
                                                                <option value="option_select_gender">Male</option>
                                                                <option value="option_select_gender">Female</option>
                                                                <option value="option_select_gender">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone-no">Phone</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="phone-no" placeholder="Phone no" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <div class="form-control-wrap">
                                                            <input type="email" class="form-control" id="email" placeholder="Email" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">National ID</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" multiple class="custom-file-input" id="nid" />
                                                                <label class="custom-file-label" for="nid">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-5 col-md-8">
                                                    <div class="form-group">
                                                        <label class="form-label">Adddress</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="address" placeholder="Address" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">General Info</h5>
                                                <p>Some common medical information about patient.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Blood Group</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Group">
                                                                <option value="">Select</option>
                                                                <option value="option_select_blood">A+</option>
                                                                <option value="option_select_blood">A-</option>
                                                                <option value="option_select_blood">AB+</option>
                                                                <option value="option_select_blood">AB-</option>
                                                                <option value="option_select_blood">B+</option>
                                                                <option value="option_select_blood">B-</option>
                                                                <option value="option_select_blood">O+</option>
                                                                <option value="option_select_blood">O-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Height</label>
                                                        <input type="text" class="form-control" id="height" placeholder="Height" />
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Weight</label>
                                                        <input type="text" class="form-control" id="weight" placeholder="Weight" />
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Blood Pressure</label>
                                                        <input type="text" class="form-control" id="bp" placeholder="Blood Pressure" />
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Pulse</label>
                                                        <input type="text" class="form-control" id="pulse" placeholder="Pulse" />
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Temperature</label>
                                                        <input type="text" class="form-control" id="temperature" placeholder="Temperature" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Madical Condition</h5>
                                                <p>Details information about patient current medical condition.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-6 col-md-8">
                                                    <div class="form-group">
                                                        <label class="form-label">Symptoms Title</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="symptoms" placeholder="Symptoms" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Symptoms Type</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Symptoms">
                                                                <option value="">Select</option>
                                                                <option value="option_select_symptoms">General Symptoms</option>
                                                                <option value="option_select_symptoms">Uncommon Symptoms</option>
                                                                <option value="option_select_symptoms">Inherited Symptoms</option>
                                                                <option value="option_select_symptoms">Viral Symptoms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Casualty</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Casualty">
                                                                <option value="">Select</option>
                                                                <option value="option_select_casualty">Yes</option>
                                                                <option value="option_select_casualty">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Department</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Department">
                                                                <option value="">Select</option>
                                                                <option value="option_select_department">Allergy and immunology</option>
                                                                <option value="option_select_department">Anesthesiology</option>
                                                                <option value="option_select_department">Cardiology</option>
                                                                <option value="option_select_department">Dermatology</option>
                                                                <option value="option_select_department">Diagnostic radiology</option>
                                                                <option value="option_select_department">Emergency medicine</option>
                                                                <option value="option_select_department">Neurology</option>
                                                                <option value="option_select_department">Obstetrics and gynecology</option>
                                                                <option value="option_select_department">Ophthalmology</option>
                                                                <option value="option_select_department">Pathology</option>
                                                                <option value="option_select_department">Pediatrics</option>
                                                                <option value="option_select_department">Psychiatry</option>
                                                                <option value="option_select_department">Surgery</option>
                                                                <option value="option_select_department">Urology</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Consultant Doctor</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Doctor">
                                                                <option value="">Select</option>
                                                                <option value="option_select_consulant">Ernesto Vargas</option>
                                                                <option value="option_select_consulant">Janet Snyder</option>
                                                                <option value="option_select_consulant">Amelia Grant</option>
                                                                <option value="option_select_consulant">Debra Grant</option>
                                                                <option value="option_select_consulant">Snyder Debra</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Patient Type</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Type">
                                                                <option value="">Select</option>
                                                                <option value="option_select_patient">OPD Patient</option>
                                                                <option value="option_select_patient">IPD Patient</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Admit Date</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Bed Group</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Bed Group">
                                                                <option value="default_option">Select</option>
                                                                <option value="option_select_bed">Male Ward - 1st Floor</option>
                                                                <option value="option_select_bed">Female Ward - 1st Floor</option>
                                                                <option value="option_select_bed">Private Ward - 2nd Floor</option>
                                                                <option value="option_select_bed">Cabin - 4th Floor</option>
                                                                <option value="option_select_bed">ICU - 3rd Floor</option>
                                                                <option value="option_select_bed">NICU - 3rd Floor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Bed Number</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select Bed">
                                                                <option value="">Select</option>
                                                                <option value="option_select_bednum">101</option>
                                                                <option value="option_select_bednum">102</option>
                                                                <option value="option_select_bednum">103</option>
                                                                <option value="option_select_bednum">105</option>
                                                                <option value="option_select_bednum">201</option>
                                                                <option value="option_select_bednum">202</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Test Report</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" multiple class="custom-file-input" id="testReport" />
                                                                <label class="custom-file-label" for="testReport">Choose files</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Symptoms Description</label>
                                                        <div class="form-control-wrap">
                                                            <div class="quill-basic">
                                                                <p>Please describe little bit!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Add Patient</button>
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


<?php include 'footer.php'; ?>
        