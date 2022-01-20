<?php
include '../../../assets/dbconnect.php';
if(isset($_POST['userMail']))
{
$userMail = $_POST['userMail'];
$sql = mysqli_query($koneksi, "select * from users where userMail='$userMail'");
if(mysqli_num_rows($sql))
{
echo '<STRONG>'.$userMail.'</STRONG> is already in use.';
}
else
{
echo 'OK';
}
}
?>