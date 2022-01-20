
<?php 
    $title = 'Sistem Informasi';
    include 'header.php';
    include 'menus.php'; 
?>
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">IPD/OPD - Patient Lists</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>You have total 163 ipd patients in hospital.</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="/demo7/hospital/patient-add.html" class="btn btn-icon btn-primary d-md-none">
                                        <em class="icon ni ni-plus"></em>
                                    </a>
                                    <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#add-warga" >
                                        <em class="icon ni ni-plus"></em>
                                        <span>Tambah Pasien</span>
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
                                                            <option value="discharged">Discharged</option>
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
                                                                                    <span class="sub-title dropdown-title">Filter Patient</span>
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
                                                                                                <label class="overline-title overline-title-alt">Bed</label>
                                                                                                <select class="form-select form-select-sm">
                                                                                                    <option value="any">Any Bed</option>
                                                                                                    <option value="cabin">Cabin</option>
                                                                                                    <option value="mward">Male Ward</option>
                                                                                                    <option value="fward">Male Ward</option>
                                                                                                    <option value="vip">VIP Cabin</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Consulant</label>
                                                                                                <select class="form-select form-select-sm">
                                                                                                    <option value="any">Any Consulant</option>
                                                                                                    <option value="ev">Ernesto Vargas</option>
                                                                                                    <option value="ve">Vargas Ernesto</option>
                                                                                                    <option value="ti">Tasmin Ifrat</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Admit Date</label>
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
                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name or patient id">
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
                                                    <span class="sub-text">Patient</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="sub-text">ID</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="sub-text">Phone</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="sub-text">Gender</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-mb">
                                                    <span class="sub-text">Report</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="sub-text">Consulant</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="sub-text">Admit Date</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="sub-text">Bed</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="sub-text">Charges</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown">
                                                                    <em class="icon ni ni-more-h"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="#">
                                                                                <em class="icon ni ni-mail"></em>
                                                                                <span>Send Email to All</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <em class="icon ni ni-edit"></em>
                                                                                <span>Edit Selected</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <em class="icon ni ni-trash"></em>
                                                                                <span>Remove Seleted</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php
                                            $id = $_SESSION['app_id'];
                                            $data = $user_home->runQuery("SELECT * FROM warga WHERE kel='1406030010' GROUP BY kk");
                                            $data->execute();
                                            $a = $data->fetchAll();
                                            foreach ($a as $row) {
                                            echo
                                            '<div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                        <label class="custom-control-label" for="uid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <a href="profile.php?uid='.$row["nik"].'">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary">
                                                                <span>'.$user_home->get_initial($row['nama']).'</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="tb-lead">'.$row['nama'].'</span>
                                                                <span>'.$row['nik'].'</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <a href="#">
                                                        <span class="fw-medium">'.$row['id'].'</span>
                                                    </a>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>+811 847-4958</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span>Male</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-mb">
                                                    <ul class="list-inline list-download">
                                                        <li>
                                                            Reports
                                                            <a href="#" class="popup">
                                                                <em class="icon ni ni-download"></em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-lead">Ernesto Vargas</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>10/02/2020</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>201-Cabin-3rd Floor</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-amount">
                                                        350.99 <span class="currency">USD</span>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                <em class="icon ni ni-mail-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Move To Discharged">
                                                                <em class="icon ni ni-curve-up-right"></em>
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
                                                                            <a href="profile.php?uid='.$row["nik"].'">
                                                                                <em class="icon ni ni-eye"></em>
                                                                                <span>View Details</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" data-toggle="modal" data-target="#editInPatient">
                                                                                <em class="icon ni ni-edit"></em>
                                                                                <span>Edit</span>
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

<div class="modal fade" role="dialog" id="add-warga">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Kirim Pesan</h6>
                <a href="#" class="close" data-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
            </div>
            <form action="" method="post">
                <div class="modal-body p-0">
                    <div class="card-inner">
                        <form action="#" class="form-validate">
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Judul Pesan</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="title" required />
                                        </div>
                                    </div>
                                </div>
                                <!--                                            <div class="col-md-6">-->
                                <!--                                                <div class="form-group">-->
                                <!--                                                    <label class="form-label" for="fv-email">Tujuan </label>-->
                                <!--                                                    <div class="form-control-wrap">-->
                                <!--                                                        <div class="form-icon form-icon-right">-->
                                <!--                                                            <em class="icon ni ni-mail"></em>-->
                                <!--                                                        </div>-->
                                <!--                                                        <input type="text" class="form-control" id="fv-email" name="fv-email" required />-->
                                <!--                                                    </div>-->
                                <!--                                                </div>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="col-md-6">-->
                                <!--                                                <div class="form-group">-->
                                <!--                                                    <label class="form-label" for="fv-phone">Phone</label>-->
                                <!--                                                    <div class="form-control-wrap">-->
                                <!--                                                        <div class="input-group">-->
                                <!--                                                            <div class="input-group-prepend">-->
                                <!--                                                                <span class="input-group-text" id="fv-phone">+880</span>-->
                                <!--                                                            </div>-->
                                <!--                                                            <input type="text" class="form-control" required />-->
                                <!--                                                        </div>-->
                                <!--                                                    </div>-->
                                <!--                                                </div>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="col-md-6">-->
                                <!--                                                <div class="form-group">-->
                                <!--                                                    <label class="form-label" for="fv-phone">Sex / Gender</label>-->
                                <!--                                                    <div class="form-control-wrap">-->
                                <!--                                                        <ul class="custom-control-group">-->
                                <!--                                                            <li>-->
                                <!--                                                                <div class="custom-control custom-radio custom-control-pro no-control">-->
                                <!--                                                                    <input type="radio" class="custom-control-input" name="fv-sex" id="sex-male" required />-->
                                <!--                                                                    <label class="custom-control-label" for="sex-male">Male</label>-->
                                <!--                                                                </div>-->
                                <!--                                                            </li>-->
                                <!--                                                            <li>-->
                                <!--                                                                <div class="custom-control custom-radio custom-control-pro no-control">-->
                                <!--                                                                    <input type="radio" class="custom-control-input" name="fv-sex" id="sex-female" required />-->
                                <!--                                                                    <label class="custom-control-label" for="sex-female">Female</label>-->
                                <!--                                                                </div>-->
                                <!--                                                            </li>-->
                                <!--                                                            <li>-->
                                <!--                                                                <div class="custom-control custom-radio custom-control-pro no-control">-->
                                <!--                                                                    <input type="radio" class="custom-control-input" name="fv-sex" id="sex-other" required />-->
                                <!--                                                                    <label class="custom-control-label" for="sex-other">Others</label>-->
                                <!--                                                                </div>-->
                                <!--                                                            </li>-->
                                <!--                                                        </ul>-->
                                <!--                                                    </div>-->
                                <!--                                                </div>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="col-md-6">-->
                                <!--                                                <div class="form-group">-->
                                <!--                                                    <label class="form-label" for="fv-subject">Subject</label>-->
                                <!--                                                    <div class="form-control-wrap">-->
                                <!--                                                        <input type="text" class="form-control" id="fv-subject" name="fv-subject" required />-->
                                <!--                                                    </div>-->
                                <!--                                                </div>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="col-md-6">-->
                                <!--                                                <div class="form-group">-->
                                <!--                                                    <label class="form-label" for="fv-topics">Topics</label>-->
                                <!--                                                    <div class="form-control-wrap">-->
                                <!--                                                        <select class="form-control form-select" id="fv-topics" name="fv-topics" data-placeholder="Select a option" required>-->
                                <!--                                                            <option label="empty" value=""></option>-->
                                <!--                                                            <option value="fv-gq">General Question</option>-->
                                <!--                                                            <option value="fv-tq">Tachnical Question</option>-->
                                <!--                                                            <option value="fv-ab">Account &amp;Billing</option>-->
                                <!--                                                        </select>-->
                                <!--                                                    </div>-->
                                <!--                                                </div>-->
                                <!--                                            </div>-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-message">Message</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-sm" id="fv-message" name="description" placeholder="Write your message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Communication</label>
                                        <ul class="custom-control-group g-3 align-center">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-email" required />
                                                    <label class="custom-control-label" for="fv-com-email">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-sms" required />
                                                    <label class="custom-control-label" for="fv-com-sms">SMS</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-phone" required />
                                                    <label class="custom-control-label" for="fv-com-phone">Phone</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" name="send" class="btn btn-lg btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
        