<?php
session_start();
if (isset($_SESSION['username']) == true) {
    header('location:welcome.php');
}
?>
<!-- WARNING : Unauthorised copying or use of any Information or other Material from this website is prohibited. Hack and PHP programming blog reserves all the rights to proceed and initiate legal action against all those who may act in violation of our warning. © 2016  !-->
<html>
<head>
    <title>Google Style Login Using PHP, jquery, ajax | HackandPhp Programming Blog</title>

    <link href="assets/google.css" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- multistep form -->
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-lg-6 col-lg-offset-3 text-center">

            <div id="logo">
                <img height="38" src="assets/img/logo.png" width="118"/>
            </div>
            <div id="info1">
                One account. All of Google.
            </div>
            <div id="info2">
                Sign in to continue to Gmail
            </div>
            <form id="msform">
                <!-- progressbar -->
                <div class="login">
                    <!-- fieldsets -->
                    <fieldset>

                        <img alt="" class="img-circle" height="100" src="assets/img/user.png"/>
                        <input class="form-control input-lg" id="email" name="email" placeholder="Enter your email"
                               required
                               type="email"/>
                        <span id="error_msg"></span>
                        <input class="btn btn-block btn-info next action-button" name="next" type="button"
                               value="Next"/>
                        <span class="help">
			<a class="pull-right" href="#">Need help?</a>
			</span>

                    </fieldset>
                    <fieldset>
                        <span class="pull-left previous" name="previous" style="cursor:pointer"><img
                                src="assets/img/arrow_back.png"/></span>
                        <span id="img"><img alt="" class="img-circle" height="100" src="assets/img/user.png"/></span>

                        <div class="clearfix"></div>
                        <strong><span id="userName"></span></strong><br/>
                        <span id="userEmail"></span>
                        <input class="form-control input-lg" id="password" name="password" placeholder="Password"
                               type="password"/>
                        <span class="pull-left" id="msg"></span>
                        <input class="btn btn-block btn-info submit action-button" name="submit" type="submit"
                               value="Sign in"/>

                        <div class="pull-left stay">
                            <input checked name="remember" type="checkbox" value="1"/> Stay signed in
                        </div>
                        <span class="help">
			<a class="pull-right" href="#">Forgot Password ?</a>
			</span>

                    </fieldset>
                </div>
            </form>
            <div class="footer">
                <div id="info4">
                    <div class="well">
                        <strong>Email:</strong> thirumaniraj3@gmail.com<br/>
                        <strong>password:</strong> 123456
                    </div>
                    <a href="#"/>Create account</a>
                </div>
                <div id="info5">
                    One Google Account for everything Google
                </div>
                <div>
                    <img id="logo2" src="assets/img/footer-logo.png"/>
                </div>
            </div>

            <div id="bottom">
                <ul>
                    <li>&copy; www.hackandphp.com</li>
                    <li>Developed by Thirumani Raj</li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="assets/js/validation.login.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="assets/js/control.js"></script>-->
</body>
</html>