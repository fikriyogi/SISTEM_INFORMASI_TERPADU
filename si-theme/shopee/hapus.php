<?php
$id = $_GET["id"];
unlink("files/".$id);
header("location:upload.php");
?>