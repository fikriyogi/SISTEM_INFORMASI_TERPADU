<?php

//membuat koneksi ke database
include '../../../assets/dbconnect.php';

$id = $_GET['Sid'];
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE Sid=");
$data = mysqli_fetch_array($query);

echo json_encode($data);