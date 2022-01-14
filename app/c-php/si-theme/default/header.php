<?php
//session_start();
//$user_home = new Login();
//if (!$user_home->is_logged_in()) {
//	$user_home->redirect('home.php');
//} else {
//	$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=?");
//	$stmt->execute([$_SESSION['userSession']]);
//	$row = $stmt->fetch(PDO::FETCH_ASSOC);
//
//	if ($user_home->set_divisi('admin')) {
//		if ($user_home->set_level('Super Admin')) {
//			// code...
//			$app_name = 'Sistem Informasi Terpadu';
//			$menu = 'Super Admin';
//		}
//	} else {
//		$user_home->redirect('location:javascript://history.go(-1)');
//		// $user_home->redirect('error.php');
//	}
//
//
//}
//?>
<!doctype html>
<html lang="<?= SI_LANG; ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="<?= CHARSET; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--    <link href="--><? //= SI_CSS; ?><!--bootstrap.min.css" rel="stylesheet" >-->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">


    <!--  Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <title>Hello, world!</title>
</head>
<body>