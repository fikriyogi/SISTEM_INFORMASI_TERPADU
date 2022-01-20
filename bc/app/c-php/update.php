<?php
require 'si-config.php';
$user_home = new Warga();

if(isset($_GET['appKey'])){
	$id = $_GET['appKey'];
	$data = $user_home->runQuery("SELECT * FROM warga WHERE nik=?");
	$data->execute([$id]);
	$row = $data->fetch();
}

if (isset($_POST['update'])) {
	// This part is similar to the db.php, but instead we update a record and not insert
	$nik = isset($_POST['nik']) ? $_POST['nik'] : NULL;
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$kk = isset($_POST['kk']) ? $_POST['kk'] : '';
	// $title = isset($_POST['title']) ? $_POST['title'] : '';
	$tgl_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : date('Y-m-d');
	// Update the record
	$stmt = $user_home->runQuery('UPDATE warga SET nama = ?, kk = ?, tgl_lahir = ? WHERE nik = ?');
	$stmt->execute([$nama, $kk, $tgl_lahir, $nik]);

	// $statement = $user_home->runQuery('INSERT INTO history (user_id, action, create_at) VALUES (?,?,?)')  ;
	// $statement->execute([$_SESSION['user_id'], 'Update Profil', $created]);

	$result = $stmt->fetchAll();

	if (isset($result)) {
		if ($row['is_notif']==1) {
			$user_home->send_mail($row['kk'],'Update Profil Success','Update Profil');
			// header('location:settings.php');
			$user_home->redirect('view.php?appKey='.$_GET['appKey'].'');
		} else {
			$user_home->redirect('view.php?appKey='.$_GET['appKey'].'');
		}
		$msg = 'Update berhasil';
	} else {
		$msg = 'Update Gagal';
	}
}

?>
<!doctype html>
<html lang="<?= SI_LANG; ?>">
<head>
	<!-- Required meta tags -->
	<meta charset="<?= CHARSET; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?= SI_CSS; ?>bootstrap.min.css" rel="stylesheet">

	<title>Hello, world!</title>
</head>
<body>
<?php if ($msg): ?>
    <p><?=$msg?></p>
<?php endif; ?>
<div class="content update">
    <h2>Update Contact #<?=$row['id']?></h2>
    <form action="" method="post">
        <label for="id">ID</label>
        <label for="name">Nama</label>
        <input type="hidden" name="nik" placeholder="1" value="<?=$_GET['appKey']?>" id="nik">
        <input type="text" name="nama" placeholder="John Doe" value="<?=$row['nama']?>" id="nama">
        <label for="email">NIK</label>
        <input type="text" name="nik" placeholder="johndoe@example.com" value="<?=$row['nik']?>" id="nik">
        <label for="email">KK</label>
        <input type="text" name="kk" placeholder="johndoe@example.com" value="<?=$row['kk']?>" id="kk">
        <label for="name">Set OTP Code When Login</label>

        <label for="tgl_lahir">tgl_lahir</label>
        <input type="date" name="tgl_lahir" value="<?=$row['tgl_lahir']?>" id="tgl_lahir"> 
        <input type="submit" name="update" value="Update">
    </form>
</div>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?= SI_JS; ?>bootstrap.bundle.min.js" ></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
