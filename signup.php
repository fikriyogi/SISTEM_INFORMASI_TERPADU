<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if ($reg_user->is_logged_in() != "") {
    $reg_user->redirect('home.php');
}

if (isset($_POST['btn-signup'])) {
    $uname = trim($_POST['txtuname']);
    $email = trim($_POST['txtemail']);
    $upass = trim($_POST['txtpass']);
    $code = md5(uniqid(rand()));

    $stmt = $reg_user->runQuery("SELECT * FROM tbl_users WHERE userEmail=?");
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0) {
        $msg = EMAIL_EXIST;
    } else {
        if ($reg_user->register($uname, $email, $upass, $code)) {
            $id = $reg_user->lasdID();
            $key = base64_encode($id);
            $id = $key;

            $message = "     
      Hello $uname,
      <br /><br />
      Welcome to Coding Cage!<br/>
      To complete your registration  please , just click following link<br/>
      <br /><br />
      <a href='".BASE_URL."verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
      <br /><br />
      Thanks,";

            $subject = SUB_REGISTER_CONFIRM;

            $reg_user->send_mail($email, $message, $subject);
            $msg = REGISTER_SUCCESS;
        } else {
            echo "sorry , Query could no execute...";
        }
    }
}
?>

  <body id="login">
    <div class="container">
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        <input type="text" class="input-block-level" placeholder="Username" name="txtuname" required />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Password" name="txtpass" required />
      <hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-signup">Sign Up</button>
        <a href="index.php" style="float:right;" class="btn btn-large">Sign In</a>
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>