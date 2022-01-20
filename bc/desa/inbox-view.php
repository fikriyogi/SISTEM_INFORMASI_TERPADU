
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
                                <div class="nk-ibx-view">
                                    <div class="nk-ibx-head">
                                        <div class="nk-ibx-head-actions">
                                            <ul class="nk-ibx-head-tools g-1">
                                                <li class="ml-n1">
                                                    <a href="inbox.php" class="btn btn-icon btn-trigger"><em class="icon ni ni-arrow-left"></em></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Archive"><em class="icon ni ni-archived"></em></a>
                                                </li>
                                                <li class="d-none d-sm-block">
                                                    <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Mark as Spam"><em class="icon ni ni-report"></em></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Delete"><em class="icon ni ni-trash"></em></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Label"><em class="icon ni ni-label"></em></a>
                                                </li>
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                        <div class="dropdown-menu">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a class="dropdown-item" href="#"><span>Mark as unread</span></a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#"><span>Mark as not important</span></a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#"><span>Archive this message</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-ibx-head-actions">
                                            <ul class="nk-ibx-head-tools g-1">
                                                <li class="d-none d-sm-block">
                                                    <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Prev"><em class="icon ni ni-chevron-left"></em></a>
                                                </li>
                                                <li class="d-none d-sm-block">
                                                    <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Next"><em class="icon ni ni-chevron-right"></em></a>
                                                </li>
                                                <li class="mr-n1 mr-lg-0">
                                                    <a href="#" class="btn btn-icon btn-trigger search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="search-wrap" data-search="search">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message" /><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            $id = $_SESSION['app_id'];
                                            $uid = $_GET['v'];
                                            $data = $user_home->runQuery("SELECT * FROM tb_message WHERE desa_id=? AND uid=?");
                                            $data->execute([$id, $uid]);
                                            $a = $data->fetchAll();
                                            foreach ($a as $row) {
                                                echo
                                                '
                                    <div class="nk-ibx-reply nk-reply">
                                        <div class="nk-ibx-reply-head">
                                            <div>
                                                <h4 class="title">'.$row["title"].'</h4>
                                                <ul class="nk-ibx-tags g-1">
                                                    <li class="btn-group is-tags">
                                                        <a class="btn btn-xs btn-primary btn-dim" href="#">Business</a><a class="btn btn-xs btn-icon btn-primary btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                    </li>
                                                    <li class="btn-group is-tags">
                                                        <a class="btn btn-xs btn-danger btn-dim" href="#">Management</a><a class="btn btn-xs btn-icon btn-danger btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                    </li>
                                                    <li class="btn-group is-tags">
                                                        <a class="btn btn-xs btn-info btn-dim" href="#">Team</a><a class="btn btn-xs btn-icon btn-info btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="d-flex g-1">
                                                <li class="d-none d-sm-block">
                                                    <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Print"><em class="icon ni ni-printer"></em></a>
                                                </li>
                                                <li class="mr-n1">
                                                    <div class="asterisk">
                                                        <a class="btn btn-trigger btn-icon btn-tooltip" href="#" data-original-title="" title=""><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                            <div class="nk-ibx-reply-item nk-reply-item">
                                                <div class="nk-reply-header nk-ibx-reply-header is-opened">
                                                    <div class="nk-reply-desc">
                                                        <div class="nk-reply-avatar user-avatar bg-blue"><span>AB</span></div>
                                                        <div class="nk-reply-info">
                                                            <div class="nk-reply-author lead-text">'.$row["title"].' <span class="date d-sm-none">20 Jan, 2020</span></div>
                                                            <div class="dropdown nk-reply-msg-info">
                                                                <a href="#" class="dropdown-toggle sub-text dropdown-indicator" data-toggle="dropdown">to Mildred</a>
                                                                <div class="dropdown-menu dropdown-menu-md">
                                                                    <ul class="nk-reply-msg-meta">
                                                                        <li>
                                                                            <span class="label">from:</span> <span class="info"><a href="#">info@softnio.com</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="label">to:</span> <span class="info"><a href="#">team@softnio.com</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="label">bcc:</span> <span class="info"><a href="#">team@softnio.com</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="label">mailed-by:</span> <span class="info"><a href="#">softnio.com</a></span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="nk-reply-msg-excerpt">It would be great if you send me itiam ut neque in magna porttitor...</div>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-reply-tools g-1">
                                                        <li class="date-msg"><span class="date">14 Jan, 2020</span></li>
                                                        <li class="replyto-msg">
                                                            <a href="#" class="btn btn-trigger btn-icon btn-tooltip" title="" id="click" data-original-title="Reply"><em class="icon ni ni-curve-up-left"></em></a>
                                                        </li>
                                                        <li class="more-actions">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a class="dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#"><em class="icon ni ni-forward-arrow-fill"></em><span>Forward</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#"><em class="icon ni ni-report-fill"></em><span>Report Spam</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-reply-body nk-ibx-reply-body">
                                                    <div class="nk-reply-entry entry">
                                                        <p>'.$row["description"].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-ibx-reply-form nk-reply-form" >
                                            <div class="nk-reply-form-header">
                                                <div class="nk-reply-form-group">
                                                    <div class="nk-reply-form-dropdown">
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-trigger btn-icon" data-toggle="dropdown" href="#"><em class="icon ni ni-curve-up-left"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-md">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em> <span>Reply to Abu Bin Ishtiyak</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><em class="icon ni ni-forward-arrow-fill"></em> <span>Forword</span></a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li>
                                                                        <a href="#"><em class="icon ni ni-edit-fill"></em> <span>Edit Subject</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-reply-form-title d-sm-none">Reply</div>
                                                    <div class="nk-reply-form-input-group">
                                                        <div class="nk-reply-form-input nk-reply-form-input-to">
                                                            <label class="label">To</label>
                                                            <tags class="tagify input-mail" tabindex="-1">
                                                                <tag title="info@softnio.com" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" __isvalid="true" value="info@softnio.com">
                                                                    <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                                                                    <div><span class="tagify__tag-text">info@softnio.com</span></div>
                                                                </tag>
                                                                <span contenteditable="" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                                            </tags>
                                                            <input type="text" value="info@softnio.com" class="input-mail tagify" placeholder="" data-whitelist="team@softnio.com, help@softnio.com, contact@softnio.com" />
                                                        </div>

                                                        <div class="nk-reply-form-input nk-reply-form-input-cc" data-content="mail-cc">
                                                            <label class="label">Cc</label>
                                                            <tags class="tagify input-mail tagify--noTags tagify--empty" tabindex="-1">
                                                                <span contenteditable="" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                                            </tags>
                                                            <input type="text" class="input-mail tagify" /><a href="#" class="toggle-opt" data-target="mail-cc"><em class="icon ni ni-cross"></em></a>
                                                        </div>
                                                        <div class="nk-reply-form-input nk-reply-form-input-bcc" data-content="mail-bcc">
                                                            <label class="label">Bcc</label>
                                                            <tags class="tagify input-mail tagify--noTags tagify--empty" tabindex="-1">
                                                                <span contenteditable="" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                                            </tags>
                                                            <input type="text" class="input-mail tagify" /><a href="#" class="toggle-opt" data-target="mail-bcc"><em class="icon ni ni-cross"></em></a>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-reply-form-nav">
                                                        <li><a tabindex="-1" class="toggle-opt" data-target="mail-cc" href="#">CC</a></li>
                                                        <li><a tabindex="-1" class="toggle-opt" data-target="mail-bcc" href="#">BCC</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="nk-reply-form-editor">
                                                <div class="nk-reply-form-field"><textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea></div>
                                            </div>
                                            <div class="nk-reply-form-tools">
                                                <ul class="nk-reply-form-actions g-1">
                                                    <li class="mr-2"><button class="btn btn-primary" type="submit">Send</button></li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="" href="#" data-original-title="Templates"><em class="icon ni ni-hash"></em></a>
                                                            <div class="dropdown-menu">
                                                                <ul class="link-list-opt no-bdr link-list-template">
                                                                    <li class="opt-head"><span>Quick Insert</span></li>
                                                                    <li>
                                                                        <a href="#"><span>Thank you message</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>Your issues solved</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>Thank you message</span></a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li>
                                                                        <a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Upload Attachment"><em class="icon ni ni-clip-v"></em></a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Upload Images"><em class="icon ni ni-img"></em></a>
                                                    </li>
                                                </ul>
                                                <ul class="nk-reply-form-actions g-1">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn-trigger btn btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#"><span>Another Option</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>More Option</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-trigger btn btn-icon mr-n2"><em class="icon ni ni-trash"></em></a>
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

<?php include 'footer.php'; ?>
        