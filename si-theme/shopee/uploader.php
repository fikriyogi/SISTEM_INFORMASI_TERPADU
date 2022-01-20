<?php
$target_path = "files/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
{ header("Location: upload.php");}
else {echo "Error uploading file. Please try again!";}
?>