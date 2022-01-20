<?php
date_default_timezone_set('Asia/Jakarta');

/* CORE SETTINGS */
define("SITE_URL", "http://localhost/");
define("APP_NAME", "Sistem Informasi Penduduk");
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test");

/* EMAIL SETTINGS */
define("SUB_PASS_RESET", "Password Reset");
define("SUB_REGISTER_CONFIRM", "Confirm Registration");
define("EMAIL_ADDRESS", "fikriyogi@gmail.com");
define("EMAIL_PASS", "@fy085264972892");

/* EMAIL TEMPLATE SETTINGS */
define("EMAIL_EXIST", "<div class='alert alert-error'>
    <button class='close' data-dismiss='alert'>&times;</button>
     <strong>Sorry !</strong>  email allready exists , Please Try another one
     </div>
     ");
define("REGISTER_SUCCESS", "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong>  We've sent an email to your mail,Please click on the confirmation link in the email to create your account. </div>");
