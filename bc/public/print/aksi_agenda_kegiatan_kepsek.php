<?php

    $nama = $_POST['nama_sekolah'];
    $alamat = $_POST['status_sekolah'];
    $tanggal = $_POST['desa'];
    $waktu = $_POST['kecamatan'];


// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("agenda_kegiatan_kepsek.rtf");

// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#NAMA_SEKOLAH", $nama, $document);
$document = str_replace("#STATUS_SEKOLAH", $alamat, $document);
$document = str_replace("#DESA", $tanggal, $document);
$document = str_replace("#KECAMATAN", $waktu, $document);

// header untuk membuka file output RTF dengan MS. Word

header("Content-type: application/msword");
header("Content-disposition: inline; filename=laporan.doc");
header("Content-length: ".strlen($document));
echo $document;
