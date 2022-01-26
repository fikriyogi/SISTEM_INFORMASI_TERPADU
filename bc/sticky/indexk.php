<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
        <title>StickyMobile PWA - Mobile Bootstrap 5 Template</title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.css"/>
        <link href="styles/lightgallery.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css"/>
        <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js"/>
        <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png"/>
        <title>Static Template</title>
    </head>
    <body class="theme-light example" data-highlight="highlight-red" data-gradient="body-default">
        <div id="preloader">
            <div class="spinner-border color-highlight" role="status"></div>
        </div>
        <div id="page">
            <div class="header  header-fixed header-logo-app header-search">
                <a href="index.html" class="header-title ">facebook</a>
                <a href="#" class="header-icon  header-icon-2">
                    <i class="fa fa-cog"></i>
                </a>
                <a href="#" data-toggle-search class="header-icon header-icon-3">
                    <i class="fa fa-search"></i>
                </a>
                <div class="search-box">
                    <input type="text" class="px-3" placeholder="Search here.. - try the word demo " data-search>
                    <a href="#" data-toggle-search class="mt-0 me-n3">
                        <i class="fa fa-angle-up color-highlight"></i>
                        <i class="clear-search"></i>
                    </a>
                </div>
            </div>
            <div id="footer-bar" class="footer-bar-1">
                <a href="index.html">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="index-components.html" class="active-nav">
                    <i class="fa fa-star"></i>
                    <span>Features</span>
                </a>
                <a href="index-pages.html">
                    <i class="fa fa-heart"></i>
                    <span>Pages</span>
                </a>
                <a href="profile.html">
                    <i class="fa fa-share"></i>
                    <span>Search</span>
                </a>
                <a href="#" data-menu="menu-settings">
                    <i class="fas fa-bars"></i>
                    <span>Settings</span>
                </a>
            </div>
            <div class="page-content header-clear-medium">
                
                <div class="card ">
                    <div class="content">
                        
                    </div>
                        <div class="mb-0">
                            <div class="comment-form-container">
    <form id="frm-comment">
        <div class="input-row">
            <input type="hidden" name="comment_id" id="commentId"
                placeholder="Name" /> <input class="input-field"
                type="text" name="name" id="name" placeholder="Name" />
        </div>
        <div class="input-row">
            <textarea class="input-field" type="text" name="comment"
                id="comment" placeholder="Add a Comment">  </textarea>
        </div>
        <div>
            <input type="button" class="btn-submit" id="submitButton"
                value="Publish" />
            <div id="comment-message">Comments Added Successfully!</div>
        </div>

    </form>
</div>
<div id="output"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-settings" class="menu menu-box-bottom menu-box-full">
                <div class="menu-title mt-0 pt-0">
                    <h1>Settings</h1>
                    <p class="color-highlight">Flexible and Easy to Use</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="list-group list-custom-small">
                        <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
                            <i class="fa font-12 fa-moon rounded-s bg-highlight color-white me-3"></i>
                            <span>Dark Mode</span>
                            <div class="custom-control scale-switch ios-switch">
                                <input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark-mode"/>
                                <label class="custom-control-label" for="switch-dark-mode"></label>
                            </div>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="list-group list-custom-large">
                        <a data-menu="menu-highlights" href="#">
                            <i class="fa font-14 fa-tint bg-green-dark rounded-s"></i>
                            <span>Page Highlight</span>
                            <strong>16 Colors Highlights Included</strong>
                            <span class="badge bg-highlight color-white">HOT</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a data-menu="menu-backgrounds" href="#" class="border-0">
                            <i class="fa font-14 fa-cog bg-blue-dark rounded-s"></i>
                            <span>Background Color</span>
                            <strong>10 Page Gradients Included</strong>
                            <span class="badge bg-highlight color-white">NEW</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title">
                    <h1>Highlights</h1>
                    <p class="color-highlight">Any Element can have a Highlight Color</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="highlight-changer">
                        <a href="#" data-change-highlight="blue">
                            <i class="fa fa-circle color-blue-dark"></i>
                            <span class="color-blue-light">Default</span>
                        </a>
                        <a href="#" data-change-highlight="red">
                            <i class="fa fa-circle color-red-dark"></i>
                            <span class="color-red-light">Red</span>
                        </a>
                        <a href="#" data-change-highlight="orange">
                            <i class="fa fa-circle color-orange-dark"></i>
                            <span class="color-orange-light">Orange</span>
                        </a>
                        <a href="#" data-change-highlight="pink2">
                            <i class="fa fa-circle color-pink2-dark"></i>
                            <span class="color-pink-dark">Pink</span>
                        </a>
                        <a href="#" data-change-highlight="magenta">
                            <i class="fa fa-circle color-magenta-dark"></i>
                            <span class="color-magenta-light">Purple</span>
                        </a>
                        <a href="#" data-change-highlight="aqua">
                            <i class="fa fa-circle color-aqua-dark"></i>
                            <span class="color-aqua-light">Aqua</span>
                        </a>
                        <a href="#" data-change-highlight="teal">
                            <i class="fa fa-circle color-teal-dark"></i>
                            <span class="color-teal-light">Teal</span>
                        </a>
                        <a href="#" data-change-highlight="mint">
                            <i class="fa fa-circle color-mint-dark"></i>
                            <span class="color-mint-light">Mint</span>
                        </a>
                        <a href="#" data-change-highlight="green">
                            <i class="fa fa-circle color-green-light"></i>
                            <span class="color-green-light">Green</span>
                        </a>
                        <a href="#" data-change-highlight="grass">
                            <i class="fa fa-circle color-green-dark"></i>
                            <span class="color-green-dark">Grass</span>
                        </a>
                        <a href="#" data-change-highlight="sunny">
                            <i class="fa fa-circle color-yellow-light"></i>
                            <span class="color-yellow-light">Sunny</span>
                        </a>
                        <a href="#" data-change-highlight="yellow">
                            <i class="fa fa-circle color-yellow-dark"></i>
                            <span class="color-yellow-light">Goldish</span>
                        </a>
                        <a href="#" data-change-highlight="brown">
                            <i class="fa fa-circle color-brown-dark"></i>
                            <span class="color-brown-light">Wood</span>
                        </a>
                        <a href="#" data-change-highlight="night">
                            <i class="fa fa-circle color-dark-dark"></i>
                            <span class="color-dark-light">Night</span>
                        </a>
                        <a href="#" data-change-highlight="dark">
                            <i class="fa fa-circle color-dark-light"></i>
                            <span class="color-dark-light">Dark</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
                </div>
            </div>
            <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title">
                    <h1>Backgrounds</h1>
                    <p class="color-highlight">Change Page Color Behind Content Boxes</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="background-changer">
                        <a href="#" data-change-background="default">
                            <i class="bg-theme"></i>
                            <span class="color-dark-dark">Default</span>
                        </a>
                        <a href="#" data-change-background="plum">
                            <i class="body-plum"></i>
                            <span class="color-plum-dark">Plum</span>
                        </a>
                        <a href="#" data-change-background="magenta">
                            <i class="body-magenta"></i>
                            <span class="color-dark-dark">Magenta</span>
                        </a>
                        <a href="#" data-change-background="dark">
                            <i class="body-dark"></i>
                            <span class="color-dark-dark">Dark</span>
                        </a>
                        <a href="#" data-change-background="violet">
                            <i class="body-violet"></i>
                            <span class="color-violet-dark">Violet</span>
                        </a>
                        <a href="#" data-change-background="red">
                            <i class="body-red"></i>
                            <span class="color-red-dark">Red</span>
                        </a>
                        <a href="#" data-change-background="green">
                            <i class="body-green"></i>
                            <span class="color-green-dark">Green</span>
                        </a>
                        <a href="#" data-change-background="sky">
                            <i class="body-sky"></i>
                            <span class="color-sky-dark">Sky</span>
                        </a>
                        <a href="#" data-change-background="orange">
                            <i class="body-orange"></i>
                            <span class="color-orange-dark">Orange</span>
                        </a>
                        <a href="#" data-change-background="yellow">
                            <i class="body-yellow"></i>
                            <span class="color-yellow-dark">Yellow</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
                </div>
            </div>
            <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title mt-n1">
                    <h1>Share the Love</h1>
                    <p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p>
                    <a href="#" class="close-menu">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="content mb-0">
                    <div class="divider mb-0"></div>
                    <div class="list-group list-custom-small list-icon-0">
                        <a href="auto_generated" class="shareToFacebook external-link">
                            <i class="font-18 fab fa-facebook-square color-facebook"></i>
                            <span class="font-13">Facebook</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToTwitter external-link">
                            <i class="font-18 fab fa-twitter-square color-twitter"></i>
                            <span class="font-13">Twitter</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToLinkedIn external-link">
                            <i class="font-18 fab fa-linkedin color-linkedin"></i>
                            <span class="font-13">LinkedIn</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToWhatsApp external-link">
                            <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                            <span class="font-13">WhatsApp</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToMail external-link border-0">
                            <i class="font-18 fa fa-envelope-square color-mail"></i>
                            <span class="font-13">Email</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#lightgallery').lightGallery();
            });
        </script>
        <script src="scripts/lightgallery-all.min.js"></script>
        <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function() {
                $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url : "ajax/comment-add.php",
                    data : str,
                    type : 'post',
                    success : function(response) {
                        var result = eval('(' + response + ')');
                        if (response) {
                            $("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                            listComment();
                        } else {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });

            $(document).ready(function() {
                listComment();
            });

            function listComment() {
                $
                        .post(
                                "ajax/comment-list.php",
                                function(data) {
                                    var data = JSON.parse(data);

                                    var comments = "";
                                    var replies = "";
                                    var item = "";
                                    var parent = -1;
                                    var results = new Array();

                                    var list = $("<ul class='outer-comment'>");
                                    var item = $("<li>").html(comments);

                                    for (var i = 0; (i < data.length); i++) {
                                        var commentId = data[i]['comment_id'];
                                        parent = data[i]['parent_comment_id'];

                                        if (parent == "0") {
                                            comments = "<div class='comment-row'>"
                                                    + "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>"
                                                    + data[i]['comment_sender_name']
                                                    + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>"
                                                    + data[i]['date']
                                                    + "</span></div>"
                                                    + "<div class='comment-text'>"
                                                    + data[i]['comment']
                                                    + "</div>"
                                                    + "<div><a class='btn-reply' onClick='postReply("
                                                    + commentId + ")'>Reply</a></div>"
                                                    + "</div>";

                                            var item = $("<li>").html(comments);
                                            list.append(item);
                                            var reply_list = $('<ul>');
                                            item.append(reply_list);
                                            listReplies(commentId, data, reply_list);
                                        }
                                    }
                                    $("#output").html(list);
                                });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++) {
                    if (commentId == data[i].parent_comment_id) {
                        var comments = "<div class='comment-row'>"
                                + " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>"
                                + data[i]['comment_sender_name']
                                + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>"
                                + data[i]['date'] + "</span></div>"
                                + "<div class='comment-text'>" + data[i]['comment']
                                + "</div>"
                                + "<div><a class='btn-reply' onClick='postReply("
                                + data[i]['comment_id'] + ")'>Reply</a></div>"
                                + "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
    </body>
</html>
