<?php
session_start();
if (!isset($_SESSION['username']) == false) {
    header('location:login_google.php');
}
?>
<p>Berhasil Login</p>
