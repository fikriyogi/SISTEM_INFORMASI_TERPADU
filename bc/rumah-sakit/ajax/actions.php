<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "test");

//variabel nim yang dikirimkan form.php
$nik = $_GET['nik'];

//mengambil data
$query = mysqli_query($koneksi, "select * from warga where nik='$nik'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$mahasiswa['nama'],
            'jk'      =>  @$mahasiswa['jk'],
            'kk'   =>  @$mahasiswa['kk'],
            'hp'      =>  @$mahasiswa['hp'],
            'jenis_pekerjaan'      =>  @$mahasiswa['jenis_pekerjaan'],
            'tgl_lahir'    =>  @$mahasiswa['tgl_lahir'],);

//tampil data
echo json_encode($data);
?>
