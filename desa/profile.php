
<?php 
    $title = 'Sistem Informasi';
    include 'header.php';
    include 'menus.php'; 


if(isset($_GET['uid'])){
    $id = $_GET['uid'];
    $data = $user_home->runQuery("SELECT * FROM warga WHERE nik=:id");
    $data->execute([":id" => $id]);
    $row = $data->fetch(PDO::FETCH_ASSOC);
    
}
else
{
    header('Location: schools.php');
}

if (isset($_POST['btn-signup'])) {
    $note = trim($_POST['note']);
    // $code = md5(uniqid(rand()));
    $create_at = date('d-m-Y H:i:s');

    $stmt = $user_home->runQuery("INSERT INTO catatan(uid,note,create_at) VALUES(?,?,?)");
    $stmt->execute([$id, $note, $create_at]);


}
?>
<div class="nk-main ">
    <!-- id="testDiv" -->
    <div class="nk-wrap " >
        <?php include 'top-menu.php'; ?>
        <div class="nk-content">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Detail/ <strong class="text-primary small"><?= $row['nama']?></strong> 

                                </h3>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div class="card">
                                <div class="card-aside-wrap">
                                    <div class="card-content">
                                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tabItem1"><em class="icon ni ni-user-circle-fill"></em><span>Informasi Pribadi</span>
                                                    <blink><span class="badge badge-pill badge-primary"><?= $user_home->birthday($row['tgl_lahir']); ?></span></blink>
                                                    </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabItem2"><em class="icon ni ni-property"></em><span>Anggota Keluarga</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabItem3"><em class="icon ni ni-capsule-fill"></em><span>Warga RT</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabItem4"><em class="icon ni ni-money"></em><span>Laporan Warga</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-wallet-in"></em><span>Vaksinasi*</span> </a>
                                            </li>
                                        </ul>
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem1">
                                                    <div class="nk-block nk-block-between">
                                                        <div class="nk-block-head">
                                                            <h6 class="title">Personal Information</h6>
                                                            <p>Informasi Vaksinasi.</p>
                                                        </div>
                                                        <div class="nk-block">
                                                            <a href="#" class="btn btn-white btn-icon btn-outline-light" data-toggle="modal" data-target="#editPersonal"><em class="icon ni ni-edit"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-block">
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Name</span><span class="profile-ud-value"><?= $row['nama']?></span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Gender</span><span class="profile-ud-value"><?= $row['jk']?></span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Age</span><span class="profile-ud-value"><?= $user_home->show_age($row['tgl_lahir']); ?> </span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Mobile</span><span class="profile-ud-value">+811 847-4958</span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Date of Birth</span><span class="profile-ud-value"><?= $user_home->tgl_indo($row['tgl_lahir']); ?></span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">NIK</span><span class="profile-ud-value"><?= $row['nik']?></span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">KK</span><span class="profile-ud-value"><?= $row['kk']?></span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Email Address</span><span class="profile-ud-value">info@softnio.com</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-line"><h6 class="title overline-title text-base">Additional Information</h6></div>
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Consulant By</span><span class="profile-ud-value">Ernesto Vargas</span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Patient Type</span><span class="profile-ud-value">In Patient</span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Country</span><span class="profile-ud-value">United State</span></div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider"><span class="profile-ud-label">Nationality</span><span class="profile-ud-value">United State</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-divider divider md"></div>
                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                            <h5 class="title">Doctors Note</h5>
                                                            <a href="#" class="link link-sm">+ Add Note</a>
                                                        </div>
                                                        <div class="bq-note">
                                                            <div class="bq-note-item">
                                                                <div class="bq-note-text">
                                                                    <p>
                                                                        Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean
                                                                        sollicitudin non nunc vel pharetra.
                                                                    </p>
                                                                </div>
                                                                <div class="bq-note-meta">
                                                                    <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                                    <span class="bq-note-sep sep">|</span><span class="bq-note-by">By <span>Softnio</span></span><a href="#" class="link link-sm link-danger">Delete Note</a>
                                                                </div>
                                                            </div>
                                                            <div class="bq-note-item">
                                                                <div class="bq-note-text">
                                                                    <p>
                                                                        Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean
                                                                        sollicitudin non nunc vel pharetra.
                                                                    </p>
                                                                </div>
                                                                <div class="bq-note-meta">
                                                                    <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                                    <span class="bq-note-sep sep">|</span><span class="bq-note-by">By <span>Softnio</span></span><a href="#" class="link link-sm link-danger">Delete Note</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabItem2">
                                                    <div class="nk-block nk-block-between">
                                                        <div class="nk-block-head">
                                                            <h6 class="title">Diagnosis Information</h6>
                                                            <p>Patients diagnosis information.</p>
                                                        </div>
                                                        <div class="nk-block">
                                                            <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addDiagnosis"><em class="icon ni ni-plus"></em></a>
                                                        </div>
                                                    </div>
                                                       
                                                    <div class="nk-block">
                                                        <div class="card">
                                                            <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                <div class="nk-tb-item nk-tb-head">
                                                                    <div class="nk-tb-col"><span class="sub-text">Report Type</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Description</span></div>
                                                                    <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                    <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                                                </div>
                                                                    <?php  
                                                                    $kk = $row['kk'];
                                                                    $data = $user_home->runQuery("SELECT * FROM warga WHERE kk=:kk");
                                                                    $data->execute([":kk"=>$kk]);
                                                                    $a = $data->fetchAll();
                                                                    foreach ($a as $r) {
                                                                        echo '
                                                                    <div class="nk-tb-item">
                                                                        <div class="nk-tb-col"><span>'.$r["nik"].'</span></div>
                                                                        <div class="nk-tb-col tb-col-sm"><span>'.$r["tgl_lahir"].'</span></div>
                                                                        <div class="nk-tb-col tb-col-md"><span>'.$r["nama"].'</span></div>
                                                                        <div class="nk-tb-col"><span class="tb-status text-success">'.$r["status_keluarga"].'</span></div>
                                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                                            <ul class="nk-tb-actions gx-2">
                                                                                <li class="nk-tb-action-hidden">
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nk-tb-action-hidden">
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Download">
                                                                                        <em class="icon ni ni-download"></em>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nk-tb-action-hidden">
                                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>';
                                                                }
                                                                    ?>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="tab-pane" id="tabItem3">
                                                    <div class="nk-block nk-block-between">
                                                        <div class="nk-block-head">
                                                            <h6 class="title">Prescription Information</h6>
                                                            <p>Patients prescription information.</p>
                                                        </div>
                                                        <div class="nk-block">
                                                            <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addPrescription"><em class="icon ni ni-plus"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-block">
                                                        <div class="card">
                                                            <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                <div class="nk-tb-item nk-tb-head">
                                                                    <div class="nk-tb-col"><span class="sub-text">Medicine</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Medicine Category</span></div>
                                                                    <div class="nk-tb-col"><span class="sub-text">Dosage</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Instruction</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Prescribed By</span></div>
                                                                    <div class="nk-tb-col tb-col-mb"><span class="sub-text">Status</span></div>
                                                                    <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                                                </div>
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col"><span>Erovit plus</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Capsule</span></div>
                                                                    <div class="nk-tb-col"><span class="fw-medium">1 - 0 - 1</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Take after full meal for 7 days.</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Ernesto Vargas</span></div>
                                                                    <div class="nk-tb-col tb-col-mb"><span class="tb-status text-success">Active</span></div>
                                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                                        <ul class="nk-tb-actions gx-2">
                                                                            <li class="nk-tb-action-hidden">
                                                                                <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                    <em class="icon ni ni-edit-fill"></em>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nk-tb-action-hidden">
                                                                                <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                                    <em class="icon ni ni-trash-fill"></em>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col"><span>Napa Extra</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Tablet</span></div>
                                                                    <div class="nk-tb-col"><span class="fw-medium">1 - 1 - 1</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Take after full meal for 3 days.</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Ernesto Vargas</span></div>
                                                                    <div class="nk-tb-col tb-col-mb"><span class="tb-status text-success">Active</span></div>
                                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                                        <ul class="nk-tb-actions gx-2">
                                                                            <li class="nk-tb-action-hidden">
                                                                                <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                    <em class="icon ni ni-edit-fill"></em>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nk-tb-action-hidden">
                                                                                <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                                    <em class="icon ni ni-trash-fill"></em>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col"><span>Sergel</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Capsule</span></div>
                                                                    <div class="nk-tb-col"><span class="fw-medium">1 - 0 - 1</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Take before meal for 15 days.</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Ernesto Vargas</span></div>
                                                                    <div class="nk-tb-col tb-col-mb"><span class="tb-status text-success">Active</span></div>
                                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                                        <ul class="nk-tb-actions gx-2">
                                                                            <li class="nk-tb-action-hidden">
                                                                                <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                    <em class="icon ni ni-edit-fill"></em>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nk-tb-action-hidden">
                                                                                <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                                    <em class="icon ni ni-trash-fill"></em>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabItem4">
                                                    <div class="nk-block nk-block-between">
                                                        <div class="nk-block-head">
                                                            <h6 class="title">Charges Information</h6>
                                                            <p>Patients charges for service.</p>
                                                        </div>
                                                        <div class="nk-block">
                                                            <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addCharges"><em class="icon ni ni-plus"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-block">
                                                        <div class="card">
                                                            <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                <div class="nk-tb-item nk-tb-head">
                                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                                    <div class="nk-tb-col"><span class="sub-text">Category</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Charges Type</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Standrad Charges ($)</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">TPA Charges ($)</span></div>
                                                                    <div class="nk-tb-col"><span class="sub-text">Applied ($)</span></div>
                                                                </div>
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col tb-col-sm"><span>10 Feb 2020</span></div>
                                                                    <div class="nk-tb-col"><span>Eye Check</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Procedures</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>35</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>00</span></div>
                                                                    <div class="nk-tb-col"><span>35</span></div>
                                                                </div>
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col tb-col-sm"><span>10 Feb 2020</span></div>
                                                                    <div class="nk-tb-col"><span>Blood Analysis</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Procedures</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>65</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>00</span></div>
                                                                    <div class="nk-tb-col"><span>65</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabItem5">
                                                    <div class="nk-block nk-block-between">
                                                        <div class="nk-block-head">
                                                            <h6 class="title">Payment Information</h6>
                                                            <p>Informasi Vaksinasi.</p>
                                                        </div>
                                                        <div class="nk-block">
                                                            <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addPayment"><em class="icon ni ni-plus"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-block">
                                                        <div class="card">
                                                            <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                <div class="nk-tb-item nk-tb-head">
                                                                    <div class="nk-tb-col"><span class="sub-text">Date</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Payment Method</span></div>
                                                                    <div class="nk-tb-col"><span class="sub-text">Amount ($)</span></div>
                                                                    <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                </div>
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col"><span>10 Feb 2020</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Vaksinasi Sinovak</span></div>
                                                                    <div class="nk-tb-col"><span>200</span></div>
                                                                    <div class="nk-tb-col"><span class="tb-status text-success">Sudah</span></div>
                                                                </div>
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col"><span>11 Feb 2020</span></div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Astrazeneka</span></div>
                                                                    <div class="nk-tb-col"><span>1923</span></div>
                                                                    <div class="nk-tb-col"><span class="tb-status text-warning">Belum</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl"
                                        data-content="userAside"
                                        data-toggle-screen="xxl"
                                        data-toggle-overlay="true"
                                        data-toggle-body="true"
                                    >
                                        <div class="card-inner-group" data-simplebar>
                                            <div class="card-inner">
                                                <div class="user-card user-card-s2">
                                                    <div class="user-avatar lg bg-primary"><span>AB</span></div>
                                                    <div class="user-info">
                                                        <div class="badge badge-outline-light badge-pill ucap">Patinet</div>
                                                        <h5>Abu Bin Ishtiyak</h5>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner card-inner-sm">
                                                <ul class="btn-toolbar justify-center gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-inner">
                                                <div class="row text-center">
                                                    <div class="col-4">
                                                        <div class="profile-stats"><span class="amount">$2123</span><span class="sub-text">Total Bill</span></div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="profile-stats"><span class="amount">$200</span><span class="sub-text">Paid</span></div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="profile-stats"><span class="amount">$1923</span><span class="sub-text">Due</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner">
                                                <h6 class="overline-title-alt mb-2">Additional</h6>
                                                <div class="row g-3">
                                                    <div class="col-6"><span class="sub-text">Patient ID:</span><span>#P7085</span></div>
                                                    <div class="col-6"><span class="sub-text">Admit Date</span><span>15 Feb, 2019 01:02 PM</span></div>
                                                    <div class="col-6"><span class="sub-text">Condition</span><span class="lead-text text-success">Normal</span></div>
                                                    <div class="col-6"><span class="sub-text">Discharged Date</span><span>16 Feb, 2019</span></div>
                                                </div>
                                            </div>
                                            <div class="card-inner">
                                                <h6 class="overline-title-alt mb-3">Groups</h6>
                                                <ul class="g-1">
                                                    <li class="btn-group">
                                                        <a class="btn btn-xs btn-light btn-dim" href="#">surgery</a><a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                    </li>
                                                    <li class="btn-group">
                                                        <a class="btn btn-xs btn-light btn-dim" href="#">cardiology</a><a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                    </li>
                                                    <li class="btn-group">
                                                        <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a><a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
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
<?php include 'footer.php'; ?>
        