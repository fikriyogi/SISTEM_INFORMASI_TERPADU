<?php 
// echo $actual_link = http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI];


session_start();
require_once __DIR__ . '/class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) { // if not login go to login page
    $user_home->redirect('index.php');
} else {
    $stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=?");
    $stmt->execute([$_SESSION['userSession']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Page Cridential Code Only for Desa Page 
    if (!$user_home->set_level('Super Admin')) {
        // header('location:index.php');
        echo 'Sorry this page only for super admin<br>';

    } else {
        echo 'You are Super Admin';
    }

    $menu = '';
    // Menu code
    if ($user_home->set_divisi('sekolah')) {
        if ($user_home->set_level('Admin')) {
            // code...
            $menu = '<ul class="sidebar-menu">
    <li class="active">
        <a href="https://demo.school.thinkbuzz.net/dashboard"><i class="fa fa-laptop"></i><span>Dashboard</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/student"><i class="fa icon-student"></i><span>Student</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/parents"><i class="fa fa-user"></i><span>Parents</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/teacher"><i class="fa icon-teacher"></i><span>Teacher</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/user"><i class="fa fa-users"></i><span>User</span> </a>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-academicmain"></i><span>Academic</span> <i class="fa pull-right fa-angle-left"></i></a>
        <ul class="treeview-menu" style="display: none;">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/classes" style="margin-left: 0px;"><i class="fa fa-sitemap"></i><span>Class</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/section" style="margin-left: 0px;"><i class="fa fa-star"></i><span>Section</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/subject" style="margin-left: 0px;"><i class="fa icon-subject"></i><span>Subject</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/syllabus" style="margin-left: 0px;"><i class="fa icon-syllabus"></i><span>Syllabus</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/assignment" style="margin-left: 0px;"><i class="fa icon-assignment"></i><span>Assignment</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/routine" style="margin-left: 0px;"><i class="fa icon-routine"></i><span>Routine</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-attendance"></i><span>Attendance</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/sattendance" style="margin-left: 0px;"><i class="fa icon-sattendance"></i><span>Student Attendance</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/tattendance" style="margin-left: 0px;"><i class="fa icon-tattendance"></i><span>Teacher Attendance</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/uattendance" style="margin-left: 0px;"><i class="fa fa-user-secret"></i><span>User Attendance</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-exam"></i><span>Exam</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/exam" style="margin-left: 0px;"><i class="fa fa-pencil"></i><span>Exam</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/examschedule" style="margin-left: 0px;"><i class="fa fa-puzzle-piece"></i><span>Exam Schedule</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/grade" style="margin-left: 0px;"><i class="fa fa-signal"></i><span>Grade</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/eattendance" style="margin-left: 0px;"><i class="fa icon-eattendance"></i><span>Exam Attendance</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-markmain"></i><span>Mark</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/mark" style="margin-left: 0px;"><i class="fa fa-flask"></i><span>Mark</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/markpercentage" style="margin-left: 0px;"><i class="fa icon-markpercentage"></i><span>Mark Distribution</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/promotion" style="margin-left: 0px;"><i class="fa icon-promotion"></i><span>Promotion</span> </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/conversation"><i class="fa fa-envelope"></i><span>Message</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/media"><i class="fa fa-film"></i><span>Media</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/mailandsms"><i class="fa icon-mailandsms"></i><span>Mail / SMS</span> </a>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-graduation-cap"></i><span>Online Exam</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/question_group" style="margin-left: 0px;"><i class="fa fa-question-circle"></i><span>Question Group</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/question_level" style="margin-left: 0px;"><i class="fa fa-level-up"></i><span>Question Level</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/question_bank" style="margin-left: 0px;"><i class="fa fa-qrcode"></i><span>Question Bank</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/online_exam" style="margin-left: 0px;"><i class="fa fa-slideshare"></i><span>Online Exam</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/instruction" style="margin-left: 0px;"><i class="fa fa-map-signs"></i><span>Instruction</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/take_exam" style="margin-left: 0px;"><i class="fa fa-user-secret"></i><span>Take Exam</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-usd"></i><span>Payroll</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/salary_template" style="margin-left: 0px;"><i class="fa fa-calculator"></i><span>Salary Template</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/hourly_template" style="margin-left: 0px;"><i class="fa fa fa-clock-o"></i><span>Hourly Template</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/manage_salary" style="margin-left: 0px;"><i class="fa fa-beer"></i><span>Manage Salary</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/make_payment" style="margin-left: 0px;"><i class="fa fa-money"></i><span>Make Payment</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/overtime" style="margin-left: 0px;"><i class="fa fa-retweet"></i><span>Overtime</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-archive"></i><span>Asset Management</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/vendor" style="margin-left: 0px;"><i class="fa fa-rss"></i><span>Vendor</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/location" style="margin-left: 0px;"><i class="fa fa-newspaper-o"></i><span>Location</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/asset_category" style="margin-left: 0px;"><i class="fa fa-life-ring"></i><span>Asset Category</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/asset" style="margin-left: 0px;"><i class="fa fa-fax"></i><span>Asset</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/asset_assignment" style="margin-left: 0px;"><i class="fa fa-plug"></i><span>Asset Assignment</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/purchase" style="margin-left: 0px;"><i class="fa fa-cart-plus"></i><span>Purchase</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa iniicon-maininventory"></i><span>Inventory</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/productcategory" style="margin-left: 0px;"><i class="fa iniicon-productcategory"></i><span>Category</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/product" style="margin-left: 0px;"><i class="fa iniicon-product"></i><span>Product</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/productwarehouse" style="margin-left: 0px;"><i class="fa iniicon-productwarehouse"></i><span>Warehouse</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/productsupplier" style="margin-left: 0px;"><i class="fa iniicon-productsupplier"></i><span>Supplier</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/productpurchase" style="margin-left: 0px;"><i class="fa iniicon-productpurchase"></i><span>Purchase</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/productsale" style="margin-left: 0px;"><i class="fa iniicon-productsale"></i><span>Sale</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa iniicon-mainleaveapplication"></i><span>Leave Application</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/leavecategory" style="margin-left: 0px;"><i class="fa iniicon-leavecategory"></i><span>Leave Category</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/leaveassign" style="margin-left: 0px;"><i class="fa iniicon-leaveassign"></i><span>Leave Assign</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/leaveapply" style="margin-left: 0px;"><i class="fa iniicon-leaveapply"></i><span>Leave Apply</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/leaveapplication" style="margin-left: 0px;"><i class="fa iniicon-leaveapplication"></i><span>Leave Application</span> </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/gmeetliveclass"><i class="fa fa fa-file-video-o"></i><span>Gmeet live class</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/tutorial"><i class="fa fa-leanpub"></i><span>Tutorial</span> </a>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-video-camera"></i><span>Zoom Metting</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/liveclass" style="margin-left: 0px;"><i class="fa fa-video-camera"></i><span>Zoom Live Class</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/zoomsettings" style="margin-left: 0px;"><i class="fa fa-camera-retro"></i><span>Zoom Settings</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-child"></i><span>Child</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/activitiescategory" style="margin-left: 0px;"><i class="fa fa-pagelines"></i><span>Activities Category</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/activities" style="margin-left: 0px;"><i class="fa fa-fighter-jet"></i><span>Activities</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/childcare" style="margin-left: 0px;"><i class="fa fa-wheelchair"></i><span>Child Care</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-library"></i><span>Library</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/lmember" style="margin-left: 0px;"><i class="fa icon-member"></i><span>Member</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/book" style="margin-left: 0px;"><i class="fa icon-lbooks"></i><span>Books</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/issue" style="margin-left: 0px;"><i class="fa icon-issue"></i><span>Issue</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/ebooks" style="margin-left: 0px;"><i class="fa iniicon-ebook"></i><span>E-Books</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-bus"></i><span>Transport</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/transport" style="margin-left: 0px;"><i class="fa icon-sbus"></i><span>Transport</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/tmember" style="margin-left: 0px;"><i class="fa icon-member"></i><span>Member</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-hhostel"></i><span>Hostel</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/hostel" style="margin-left: 0px;"><i class="fa icon-hostel"></i><span>Hostel</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/category" style="margin-left: 0px;"><i class="fa fa-leaf"></i><span>Category</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/hmember" style="margin-left: 0px;"><i class="fa icon-member"></i><span>Member</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-gg-circle"></i><span>Sponsorship</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/candidate" style="margin-left: 0px;"><i class="fa fa-odnoklassniki"></i><span>Candidate</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/sponsor" style="margin-left: 0px;"><i class="fa fa-odnoklassniki"></i><span>Sponsor</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/sponsorship" style="margin-left: 0px;"><i class="fa fa fa-gg"></i><span>Sponsorship</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-account"></i><span>Account</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/feetypes" style="margin-left: 0px;"><i class="fa icon-feetypes"></i><span>Fee Types</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/invoice" style="margin-left: 0px;"><i class="fa icon-invoice"></i><span>Invoice</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/paymenthistory" style="margin-left: 0px;"><i class="fa icon-payment"></i><span>Payment History</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/expense" style="margin-left: 0px;"><i class="fa icon-expense"></i><span>Expense</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/income" style="margin-left: 0px;"><i class="fa iniicon-income"></i><span>Income</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/global_payment" style="margin-left: 0px;"><i class="fa fa-balance-scale"></i><span>Global Payment</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-noticemain"></i><span>Announcement</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/notice" style="margin-left: 0px;"><i class="fa fa-calendar"></i><span>Notice</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/event" style="margin-left: 0px;"><i class="fa fa-calendar-check-o"></i><span>Event</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/holiday" style="margin-left: 0px;"><i class="fa icon-holiday"></i><span>Holiday</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-clipboard"></i><span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/classesreport" style="margin-left: 0px;"><i class="fa icon-classreport"></i><span>Class Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/sponsorshipreport" style="margin-left: 0px;"><i class="fa fa fa-safari"></i><span>Sponsorship Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/studentreport" style="margin-left: 0px;"><i class="fa icon-studentreport"></i><span>Student Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/idcardreport" style="margin-left: 0px;"><i class="fa iniicon-idcardreport"></i><span>ID Card Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/admitcardreport" style="margin-left: 0px;"><i class="fa iniicon-admitcardreport"></i><span>Admit Card Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/routinereport" style="margin-left: 0px;"><i class="fa iniicon-routinereport"></i><span>Routine Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/examschedulereport" style="margin-left: 0px;"><i class="fa iniicon-examschedulereport"></i><span>Exam Schedule Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/attendancereport" style="margin-left: 0px;"><i class="fa icon-attendancereport"></i><span>Attendance Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/attendanceoverviewreport" style="margin-left: 0px;"><i class="fa iniicon-attendanceoverviewreport"></i><span>Attendance Overview Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/librarybooksreport" style="margin-left: 0px;"><i class="fa iniicon-librarybooksreport"></i><span>Library Books Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/librarycardreport" style="margin-left: 0px;"><i class="fa iniicon-librarycardreport"></i><span>Library Card Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/librarybookissuereport" style="margin-left: 0px;"><i class="fa iniicon-librarybookissuereport"></i><span>Library Book Issue Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/terminalreport" style="margin-left: 0px;"><i class="fa iniicon-terminalreport"></i><span>Terminal Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/meritstagereport" style="margin-left: 0px;"><i class="fa iniicon-meritstagereport"></i><span>Merit Stage Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/tabulationsheetreport" style="margin-left: 0px;"><i class="fa iniicon-tabulationsheetreport"></i><span>Tabulation Sheet Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/marksheetreport" style="margin-left: 0px;"><i class="fa iniicon-marksheetreport"></i><span>Mark Sheet Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/progresscardreport" style="margin-left: 0px;"><i class="fa iniicon-progresscardreport"></i><span>Progress Card Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/studentsessionreport" style="margin-left: 0px;"><i class="fa fa-recycle"></i><span>Student Session Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/onlineexamreport" style="margin-left: 0px;"><i class="fa iniicon-onlineexamreport"></i><span>Online Exam Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/onlineexamquestionreport" style="margin-left: 0px;"><i class="fa iniicon-onlineexamquestionreport"></i><span>Online Exam Question Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/onlineexamquestionanswerreport" style="margin-left: 0px;"><i class="fa fa-sticky-note-o"></i><span>Online Exam Question Answer Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/onlineadmissionreport" style="margin-left: 0px;"><i class="fa iniicon-onlineadmissionreport"></i><span>Online Admission Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/certificatereport" style="margin-left: 0px;"><i class="fa fa-diamond"></i><span>Certificate Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/leaveapplicationreport" style="margin-left: 0px;"><i class="fa iniicon-leaveapplicationreport"></i><span>Leave Application Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/productpurchasereport" style="margin-left: 0px;"><i class="fa iniicon-productpurchasereport"></i><span>Product Purchase Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/productsalereport" style="margin-left: 0px;"><i class="fa iniicon-productsalereport"></i><span>Product Sale Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/searchpaymentfeesreport" style="margin-left: 0px;"><i class="fa iniicon-searchpaymentfeesreport"></i><span>Search Payment Fees Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/feesreport" style="margin-left: 0px;"><i class="fa iniicon-feesreport"></i><span>Fees Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/duefeesreport" style="margin-left: 0px;"><i class="fa iniicon-duefeesreport"></i><span>Due Fees Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/balancefeesreport" style="margin-left: 0px;"><i class="fa iniicon-balancefeesreport"></i><span>Balance Fees Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/transactionreport" style="margin-left: 0px;"><i class="fa iniicon-transactionreport"></i><span>Transaction Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/studentfinereport" style="margin-left: 0px;"><i class="fa iniicon-studentfinereport"></i><span>Student Fine Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/overtimereport" style="margin-left: 0px;"><i class="fa fa-gg-circle"></i><span>Overtime Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/salaryreport" style="margin-left: 0px;"><i class="fa iniicon-salaryreport"></i><span>Salary Report</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/accountledgerreport" style="margin-left: 0px;"><i class="fa iniicon-accountledgerreport"></i><span>Account Ledger Report</span> </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/onlineadmission"><i class="fa iniicon-onlineadmission"></i><span>Online Admission</span> </a>
    </li>
    <li class="">
        <a href="https://demo.school.thinkbuzz.net/visitorinfo"><i class="fa icon-visitorinfo"></i><span>Visitor Information</span> </a>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa icon-administrator"></i><span>Administrator</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/schoolyear" style="margin-left: 0px;"><i class="fa fa fa-calendar-plus-o"></i><span>Academic Year</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/studentgroup" style="margin-left: 0px;"><i class="fa fa-object-group"></i><span>Student Group</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/complain" style="margin-left: 0px;"><i class="fa fa-commenting"></i><span>Complain</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/certificate_template" style="margin-left: 0px;"><i class="fa fa-certificate"></i><span>Certificate Template</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/systemadmin" style="margin-left: 0px;"><i class="fa icon-systemadmin"></i><span>System Admin</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/resetpassword" style="margin-left: 0px;"><i class="fa icon-reset_password"></i><span>Reset Password</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/sociallink" style="margin-left: 0px;"><i class="fa iniicon-sociallink"></i><span>Social Link</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/mailandsmstemplate" style="margin-left: 0px;"><i class="fa icon-template"></i><span>Mail / SMS Template</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/bulkimport" style="margin-left: 0px;"><i class="fa fa-upload"></i><span>Import</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/backup" style="margin-left: 0px;"><i class="fa fa-download"></i><span>Backup</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/usertype" style="margin-left: 0px;"><i class="fa icon-role"></i><span>Role</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/permission" style="margin-left: 0px;"><i class="fa icon-permission"></i><span>Permission</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/addons" style="margin-left: 0px;"><i class="fa fa-crosshairs"></i><span>Addons</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/update" style="margin-left: 0px;"><i class="fa fa-refresh"></i><span>Update</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-home"></i><span>Frontend</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/posts_categories" style="margin-left: 0px;"><i class="fa fa-anchor"></i><span>Posts Categories</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/posts" style="margin-left: 0px;"><i class="fa fa-thumb-tack"></i><span>Posts</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/pages" style="margin-left: 0px;"><i class="fa fa-connectdevelop"></i><span>Pages</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/frontendmenu" style="margin-left: 0px;"><i class="fa iniicon-fmenu"></i><span>Menu</span> </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="https://demo.school.thinkbuzz.net/#"><i class="fa fa-gavel"></i><span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/setting" style="margin-left: 0px;"><i class="fa fa-gears"></i><span>General Setting</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/frontend_setting" style="margin-left: 0px;"><i class="fa fa-asterisk"></i><span>Frontend Settings</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/paymentsettings" style="margin-left: 0px;"><i class="fa icon-paymentsettings"></i><span>Payment Settings</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/smssettings" style="margin-left: 0px;"><i class="fa fa-wrench"></i><span>SMS Settings</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/emailsetting" style="margin-left: 0px;"><i class="fa iniicon-ini-emailsetting"></i><span>Email Setting</span> </a>
            </li>
            <li class="">
                <a href="https://demo.school.thinkbuzz.net/marksetting" style="margin-left: 0px;"><i class="fa fa-futbol-o"></i><span>Mark Setting</span> </a>
            </li>
        </ul>
    </li>
</ul>
';
        }
    } elseif ($user_home->set_divisi('desa')) {
        if ($user_home->set_level('Admin')) {
            // code...
            $menu = 'Menu Admin Desa';
        }
    } elseif ($user_home->set_divisi('rumah sakit')) {
        if ($user_home->set_level('Admin')) {
            // code...
            $menu = 'Menu Admin Rumah Sakit';
        }
    }
    
    // if($divisi=='desa') { // Apabila login di divisi desa
    //     if ($level=='Admin') {
    //       // code...
    //     } elseif($level=='Kepala Desa') {
          
    //     } elseif ($level=='Perangkat Desa') {
    //       // code...
    //     } elseif ($level=='Kepala Dusun') {
    //       // code...
    //     } elseif ($level=='Ketua RW') {
    //       // code...
    //     } elseif ($level=='Ketua RT') {
    //       // code...
    //     }
    // } elseif($divisi='rumah sakit') {
    //     if ($level=='Admin') {
    //       // code...
    //     } elseif($level=='Kepala RS') {
          
    //     } elseif ($level=='Perangkat Desa') {
    //       // code...
    //     } elseif ($level=='Kepala Dusun') {
    //       // code...
    //     } elseif ($level=='Ketua RW') {
    //       // code...
    //     } elseif ($level=='Ketua RT') {
    //       // code...
    //     }
    // } elseif($divisi='sekolah') {
    //     if ($level=='Admin') {
    //       // code...
    //     } elseif ($level=='Kepala Sekolah') {
    //       // code...
    //     } elseif ($level=='Bendahara') {
    //       // code...
    //     } elseif ($level=='Kepala Perpustakaan') {
    //       // code...
    //     }
    // }
    
    
    // /////////
    // if ($level=='Super Admin' && $divisi=='desa') {
    //   echo 'Anda Super Admin';
    // } elseif ($level=='Admin' && $divisi=='sekolah') {
    //   echo 'Anda Admin Sekolah';
    //   $menu = 'Menu Admin Sekolah';
    // } elseif ($level=='Admin' && $divisi=='rumah sakit') {
    //   echo 'Anda Admin Rumah Sakit';
    //   $menu = 'Menu Admin Rumah Sakit';
    // } else {
    //   echo 'Alamat tidak bisa di akses';
    // }

    echo $menu;


}




// CRSF Form Submit with token
// session_start();
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
         // Proceed to process the form data
    } else {
         // Log this as a warning and keep an eye on these attempts
    }
}

// Function auto Logout php
function auto_logout($time = 60) {
      // jika ada session
      if(isset($_SESSION["user"])){
      
          // jika tidak ada aktivitas pada browser selama 60 detik, maka ...
          if((time() - $_SESSION["last_login_time"]) > $time){
          
              // akan diarahkan kehalaman logout.php
              header("location: logout.php");
          }
          
          else {
          // jika ada aktivitas, maka update tambah waktu session
              $_SESSION["last_login_time"] = time();
              
              echo "<h3>User : <u>".$_SESSION["user"]."</u></h3>";
              echo "<h3>Session Time : <u>".$_SESSION["last_login_time"]."</u></h3>";
              echo "<a href='logout.php'>Logout</a>";
          }
      }
      
      else {
          header("location:index.php");
      }
}


// Dynamic menu php pdo mysql

// CREATE TABLE IF NOT EXISTS `menu` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `name` varchar(250) NOT NULL,
//   `parentId` int(11) DEFAULT NULL,
//   PRIMARY KEY (`id`),
//   KEY `parentId` (`parentId`)
// ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

// --
// -- Dumping data for table `menu`
// --

// INSERT INTO `menu` (`id`, `name`, `parentId`) VALUES
// (3, 'Menu 1', NULL),
// (4, 'Menu 2', NULL),
// (5, 'Menu 1.1', 3),
// (6, 'Menu 1.2', 3),
// (7, 'Menu 1.3', 3),
// (8, 'Menu 2.1', 4),
// (9, 'Menu 2.2', 4),
// (10, 'Menu 3', NULL),
// (11, 'Menu 4', NULL),
// (12, 'Menu 4.1', 11);
// $conn = new PDO("mysql:host=localhost;dbname=mydemo", 'root', '');
// $stmt = $conn->prepare('select * from menu where parentId is null');
// $stmt->execute();
?>
<!-- 
<ul id="menu">
  <?php while($menu1 = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
    <li><?php echo $menu1->name; ?>
      <?php
        $stmt1 = $conn->prepare('select * from menu where parentId = :id');
        $stmt1->bindValue('id', $menu1->id);
        $stmt1->execute();
      ?>
      <?php if($stmt1->rowCount() > 0) { ?>
      <ul>
        <?php while($menu2 = $stmt1->fetch(PDO::FETCH_OBJ)) { ?>
            <li><?php echo $menu2->name; ?></li>
        <?php } ?>
      </ul>
      <?php } ?>
    </li>
  <?php } ?>
</ul>
?>
 -->