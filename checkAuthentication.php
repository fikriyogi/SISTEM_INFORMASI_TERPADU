<?php
$con = mysqli_connect('localhost', 'root', '', 'test');

if (isset($_POST['email']) && (isset($_POST['password']))) {

    if ($_POST['password'] != "") {
        $query = mysqli_query($con, "select * from tbl_users where userEmail='" . $_POST['email'] . "' ");
        $num = mysqli_num_rows($query);
        if ($num == 1) {

            $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

            if (password_verify($_POST['password'], $result["userPass"])) {
                $action = "SHOW_SUCCESS";
                session_start();
                $_SESSION['userName'] = $result['userName'];
                $_SESSION['email'] = $result['userEmail'];
                $msg = "Succesfully Logged in. Thank You..";
                echo json_encode(array('action' => $action, 'msg' => $msg));
            } else {
                $action = "SHOW_ERROR";
                $msg = "The email and password you entered don't match. ";
                echo json_encode(array('action' => $action, 'msg' => $msg));
        }
    }
    }
} else {
    $action = "SHOW_ERROR";
    $msg = "Please enter your  Password.";
    echo json_encode(array('action' => $action, 'msg' => $msg));
}



