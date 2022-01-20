<?php
require 'si-config.php';
$user_home = new Warga();


if(isset($_GET['appKey'])){
	$id = $_GET['appKey'];
	$data = $user_home->runQuery("SELECT * FROM warga WHERE nik=?");
	$data->execute([$id]);
	$a = $data->fetchAll();
}
require_once SI_THEME . 'default/header.php';

?>

<table class="table table-bordered" width="90%">
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nama</th>
        <th>nik</th>
        <th>kk</th>
        <th>Action</th>
    </tr>
	<?php
	$no = 1;
	foreach($a as $row)
	{
		echo "<tr>";
		echo "<td>".$no."</td>";
		echo "<td>".$row['id']."</td>";
		echo "<td><a class='btn btn-info' href='profil-penduduk.php?id=".$row['id']."'>".$row['nama']."</a></td>";
		echo "<td>".$row['nik']."</td>";
		echo "<td>".$row['tgl_lahir']."</td>";
		echo "<td><a class='btn btn-info' href='update.php?appKey=".$row['nik']."'>Update</a> | <a class='btn btn-info' href='update-tps.php?id=".$row['id']."'>TPS</a> |
                        <a class='btn btn-danger' href='penduduk.php?hapus_siswa=".$row['id']."' onclick='return confirm(".'Are you sure'.")'>Hapus</a></td>";
		echo "</tr>";
		$no++;
	}
	?>
</table>
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
