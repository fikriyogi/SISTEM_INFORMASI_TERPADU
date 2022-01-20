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
        $number = preg_match('@[0-9]@', $upass);
        $uppercase = preg_match('@[A-Z]@', $upass);
        $lowercase = preg_match('@[a-z]@', $upass);
        $specialChars = preg_match('@[^\w]@', $upass);

        if(strlen($upass) < 8) {
            $msg = "Password must be at least 8 characters in length";
        } elseif (!$number) {
            $msg = "must contain at least one number";
        } elseif (!$uppercase) {
            $msg = "one upper case letter, one lower case letter and one special character.";
        } elseif (!$lowercase) {
            $msg = "one lower case letter and one special character.";
        } elseif (!$specialChars) {
            $msg = "one special character.";
        } else {
            // $msg = "Password is strength";
            $reg_user->register($uname, $email, $upass, $code);
            $id = $reg_user->lasdID();
            $key = base64_encode($id);
            $id = $key;

            $message = "     
                          Hello $uname,
                          <br /><br />
                          Welcome to Coding Cage!<br/>
                          To complete your registration  please , just click following link<br/>
                          <br /><br />
                          <a href='".SITE_URL."verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
                          <br /><br />
                          Thanks,";

            $subject = SUB_REGISTER_CONFIRM;

            $reg_user->send_mail($email, $message, $subject);
            $msg = REGISTER_SUCCESS;
        }





    }
}
?>
<style>
    /* The message box is shown when the user clicks on the password field */
    #message {
        display:none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    #message p {
        padding: 10px 35px;
        font-size: 18px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }






</style>
  <body id="login">
    <div class="container">
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        <input type="text" class="input-block-level" placeholder="Username" name="txtuname" required />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Password" id="txtpass" name="txtpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="txtpass" required />
          <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
      <hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-signup">Sign Up</button>
        <a href="index.php" style="float:right;" class="btn btn-large">Sign In</a>
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="public/assets/js/my-script.js"></script>
  </body>
</html>