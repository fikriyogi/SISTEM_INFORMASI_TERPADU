
<?php

    $title = 'Sistem Informasi';
    include 'header.php';
    // include 'menus.php'; 
?>

        <div class="nk-content ">
            <div class="container-overlay">
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
                                            <a class="nk-ibx-menu-item" href="inbox.php">
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
                                            <a class="nk-ibx-menu-item" href="outbox.php">
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

                                    <?php
                                            $data = $user_home->runQuery("SELECT * FROM tb_message WHERE desa_id=? AND user_id=?");
                                            $data->execute([$_SESSION['app_id'], $_SESSION['userSession']]);
                                            $a = $data->fetchAll();
                                            foreach ($a as $row) {
                                                echo
                                                '
                                    <div class="nk-ibx-item">
                                        <a href="inbox-view.php?v='.$row["uid"].'" class="nk-ibx-link"></a>
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
                                                    <div class="lead-text">'.$row["title"].'</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                            <div class="nk-ibx-context-group">
                                                <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">'.$row["description"].'
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
                                    </div>';
                                            } ?>
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
<?php
if (isset($_POST['send'])) {
$title = trim($_POST['title']);
$description = trim($_POST['description']);
    $sender = $_SESSION['userSession'];
$uid = md5(uniqid(rand()));

// $msg = "Password is strength";
$user_home->send_message($title, $description, $sender, $_SESSION['app_id'], $uid);

$message = "
Hello $uname,
<br /><br />
Welcome to Coding Cage!<br/>
To complete your registration  please , just click following link<br/>
<br /><br />
<a href='".SITE_URL."verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
<br /><br />
Thanks,";

$subject = "Pesan Berhasil Terkirim";

$user_home->send_mail($email, $message, $subject);
$msg = REGISTER_SUCCESS;

$user_home->create_log($_SESSION['userSession'], "Kirim Pesan Baru");

}

include 'footer.php'; ?>
        