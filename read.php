<?php
require 'si-config.php';
$user_home = new Warga();

$data = $user_home->runQuery("SELECT * FROM warga");
$data->execute();
$a = $data->fetchAll();

require_once SI_THEME . 'default/header.php';

?>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <!-- List Data Menggunakan DataTable -->             
    </tbody>
  </table>
</div>


<!-- <table class="table table-bordered" width="90%">
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
		echo "<td><a class='btn btn-info' href='view.php?appKey=".$row['nik']."'>Siswa</a> | <a class='btn btn-info' href='update-tps.php?id=".$row['id']."'>TPS</a> |
                        <a class='btn btn-danger' href='penduduk.php?hapus_siswa=".$row['id']."' onclick='return confirm(".'Are you sure'.")'>Hapus</a></td>";
		echo "</tr>";
		$no++;
	}
	?>
</table> -->
<!-- Optional JavaScript; choose one of the two! -->
<?php
require_once SI_THEME . 'default/footer.php';
?>