<?php
require_once 'class.user.php';
$user = new USER();

if (empty($_GET['id']) && empty($_GET['code'])) {
    $user->redirect('index.php');
}

if (isset($_GET['id']) && isset($_GET['code'])) {
    $id = base64_decode($_GET['id']);
    $code = $_GET['code'];

    $stmt = $user->runQuery("SELECT * FROM tbl_users WHERE userID=:uid AND tokenCode=:token");
    $stmt->execute([":uid" => $id, ":token" => $code]);
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() == 1) {
        if (isset($_POST['btn-reset-pass'])) {
            $pass = $_POST['pass'];
            $cpass = $_POST['confirm-pass'];
            // $n_pass = md5($cpass);
            $n_pass = password_hash($cpass, PASSWORD_DEFAULT);
            if ($cpass !== $pass) {
                $msg = "<div class='alert alert-block'><button class='close' data-dismiss='alert'>&times;</button><strong>Sorry!</strong>  Password Doesn't match.</div>";
            } else {
                $stmt = $user->runQuery("UPDATE tbl_users SET userPass=:upass WHERE userID=:uid");
                $stmt->execute([":upass" => $n_pass, ":uid" => $rows['userID']]);

                $msg = "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Password Changed.</div>";
                header("refresh:5;index.php");
            }
        }
    } else {
        exit();
    }
}
include "header.php";
?>

<body id="login">
<div class="container">
    <div class='alert alert-success'>
        <strong>Hello !</strong> <?php echo $rows['userName']; ?> you are here to reset your forgetton password.
    </div>
    <form class="form-signin" method="post">
        <h3 class="form-signin-heading">Password Reset.</h3>
        <hr/>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
        <input type="password" class="input-block-level" placeholder="New Password" name="pass" required/>
        <input type="password" class="input-block-level" placeholder="Confirm New Password" name="confirm-pass"
               required/>
        <hr/>
        <button class="btn btn-large btn-primary" type="submit" name="btn-reset-pass">Reset Your Password</button>

    </form>

</div> <!-- /container -->
<script src="bootstrap/js/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>