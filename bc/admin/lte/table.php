
<?php
  include 'header.php';
  include 'menu.php';
  
  // if(!isset($_SESSION["user_id"]))
  // {
  //     header("location:../
  //         login.php");
  // }

  include('library.php');
  $lib = new Library();
  @$nik = $_GET['nik'];
  if ($nik == '') {
    $data_siswa = $lib->show('SELECT * FROM warga');
  } else {
    $data_siswa = $lib->show('SELECT * FROM warga WHERE nik='.$nik.'');
  }


  if(isset($_GET['hapus_siswa']))
  {
      $id = $_GET['hapus_siswa'];
      $status_hapus = $lib->delete($id);
      if($status_hapus)
      {
          header('Location: penduduk.php');
      }
  }
  
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Advanced Form Elements
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Advanced Elements</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                  <a class="btn btn-social btn-flat btn-success btn-sm" data-toggle="dropdown"><i class="fa fa-plus"></i> Tambah Penduduk</a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk/form_peristiwa/1" class="btn btn-social btn-flat btn-block btn-sm" title="Tambah Data Penduduk Lahir"><i class="fa fa-plus"></i>  Penduduk Lahir</a>
                    </li>
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk/form_peristiwa/5" class="btn btn-social btn-flat btn-block btn-sm" title="Tambah Data Penduduk Masuk"><i class="fa fa-plus"></i>  Penduduk Masuk</a>
                    </li>
                  </ul>
                </div>
                              <a href="#" title="Hapus Data Terpilih" onclick="deleteAllBox('mainform', 'https://demo.opensid.or.id/penduduk/delete_all/1/0')" class="btn btn-social btn-flat btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i class="fa fa-trash-o"></i> Hapus Data Terpilih</a>
                            <div class="btn-group-vertical">
                  <a class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi Lainnya</a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk/ajax_cetak/0/cetak" class="btn btn-social btn-flat btn-block btn-sm" title="Cetak Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Data"><i class="fa fa-print"></i> Cetak</a>
                    </li>
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk/ajax_cetak/0/unduh" class="btn btn-social btn-flat btn-block btn-sm" title="Unduh Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Data"><i class="fa fa-download"></i> Unduh</a>
                    </li>
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk/ajax_adv_search" class="btn btn-social btn-flat btn-block btn-sm" title="Pencarian Spesifik" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Pencarian Spesifik"><i class="fa fa-search"></i> Pencarian Spesifik</a>
                    </li>
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk/program_bantuan" class="btn btn-social btn-flat btn-block btn-sm" title="Pencarian Program Bantuan" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Pencarian Program Bantuan"><i class="fa fa-search"></i> Pencarian Program Bantuan</a>
                    </li>
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk/search_kumpulan_nik" class="btn btn-social btn-flat btn-block btn-sm" title="Pilihan Kumpulan NIK" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Pilihan Kumpulan NIK"><i class="fa fa-users"></i> Pilihan Kumpulan NIK</a>
                    </li>
                    <li>
                      <a href="https://demo.opensid.or.id/penduduk_log/clear" class="btn btn-social btn-flat btn-block btn-sm" title="Log Data Penduduk"><i class="fa fa-book"></i> Log Penduduk</a>
                    </li>
                  </ul>
                </div>
                <a href="https://demo.opensid.or.id/penduduk/clear" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-refresh"></i>Bersihkan</a>
              </div>
              <div class="box-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <form id="mainform" name="mainform" method="post">
                    <div class="row">
                      <div class="col-sm-9">
                        <select class="form-control input-sm" name="filter" onchange="formAction('mainform', 'https://demo.opensid.or.id/penduduk/filter/filter')">
                          <option value="">Status Penduduk</option>
                                                  <option value="1">Tetap</option>
                                                  <option value="2">Tidak Tetap</option>
                                              </select>
                        <select class="form-control input-sm" name="status_dasar" onchange="formAction('mainform', 'https://demo.opensid.or.id/penduduk/filter/status_dasar')">
                          <option value="">Status Dasar</option>
                                                  <option value="1" selected="selected">Hidup</option>
                                                  <option value="2">Mati</option>
                                                  <option value="3">Pindah</option>
                                                  <option value="4">Hilang</option>
                                                  <option value="6">Pergi</option>
                                                  <option value="9">Tidak Valid</option>
                                              </select>
                        <select class="form-control input-sm" name="sex" onchange="formAction('mainform', 'https://demo.opensid.or.id/penduduk/filter/sex')">
                          <option value="">Jenis Kelamin</option>
                                                  <option value="1" selected="selected">Laki-laki</option>
                                                  <option value="2">Perempuan</option>
                                              </select>
                        
    <select class="form-control input-sm " name="dusun" onchange="formAction('mainform','https://demo.opensid.or.id/penduduk/filter/dusun')">
      <option value="">Pilih Dusun</option>
          <option value="345">345</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="SENGGIGI">Senggigi</option>
          <option value="test">Test</option>
          <option value="KERANDANGAN">Kerandangan</option>
          <option value="LOCO">Loco</option>
          <option value="BATUBEULAH">Batubeulah</option>
          <option value="MANGSIT">Mangsit</option>
          <option value="SUKAMAJU">Sukamaju</option>
          <option value="CIPETE">Cipete</option>
          <option value="BUNAR INPRES">Bunar Inpres</option>
          <option value="BUNAR MASJID">Bunar Masjid</option>
          <option value="GELINGSENG">Gelingseng</option>
          <option value="SOMBER">Somber</option>
          <option value="TANGSE">Tangse</option>
          <option value="1">1</option>
      </select>
                      </div>
                      <div class="col-sm-3">
                        <div class="input-group input-group-sm pull-right">
                          <input name="cari" id="cari" class="form-control ui-autocomplete-input" placeholder="Cari..." type="text" title="Pencarian berdasarkan nama penduduk" value="" onkeypress="if (event.keyCode == 13){$('#'+'mainform').attr('action', 'https://demo.opensid.or.id/penduduk/filter/cari');$('#'+'mainform').submit();}" autocomplete="off">
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default" onclick="$('#'+'mainform').attr('action', 'https://demo.opensid.or.id/penduduk/filter/cari');$('#'+'mainform').submit();"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive table-min-height" style="padding-bottom: 0px;">
                                          <h5 class="box-title text-center"><b>PENDIDIKAN DALAM KK : BELUM TAMAT SD/SEDERAJAT - LAKI-LAKI</b></h5>
                                        <table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
                        <thead class="bg-gray disabled color-palette">
                          <tr>
                            <th><input type="checkbox" id="checkall"></th>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Foto</th>
                            <th><a href="https://demo.opensid.or.id/penduduk/index/1/1 ">NIK <i class="fa fa-sort fa-sm"></i></a></th>
                            <th>Tag ID Card</th>
                            <th><a href="https://demo.opensid.or.id/penduduk/index/1/3 ">Nama <i class="fa fa-sort fa-sm"></i></a></th>
                            <th><a href="https://demo.opensid.or.id/penduduk/index/1/5 ">No. KK <i class="fa fa-sort fa-sm"></i></a></th>
                            <!-- tambah kolom orang tua-->
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <!-- tambah kolom orang tua-->
                            <th>No. Rumah Tangga</th>
                            <th>Alamat</th>
                            <th>Dusun</th>
                            <th>RW</th>
                            <th>RT</th>
                            <th>Pendidikan dalam KK</th>
                            <th><a href="https://demo.opensid.or.id/penduduk/index/1/7 ">Umur <i class="fa fa-sort fa-sm"></i></a></th>
                            <th>Pekerjaan</th>
                            <th>Kawin</th>
                            <th><a href="https://demo.opensid.or.id/penduduk/index/1/11 ">Tgl Peristiwa <i class="fa fa-sort fa-sm"></i></a></th>
                            <th><a href="https://demo.opensid.or.id/penduduk/index/1/9 ">Tgl Terdaftar <i class="fa fa-sort fa-sm"></i></a></th>
                          </tr>
                        </thead>
                        <tbody>
                                                                            <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="11861"></td>
                                <td class="padat">1</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu" style="">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11861" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/11861" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/11861/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/11861" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/11861" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/11861" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/11861" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11861" id="test" name="11861">4315172808040001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">WIKAL SALMAN ALPARISI</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3702">4315170908120032 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">YAYAN ALI SOPYAN</td>
                                <td nowrap="">NENENG AWANGSIH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. PAKAR BARAT I NO. 54</td>
                                <td nowrap="">3</td>
                                <td>7</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>17</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="975"></td>
                                <td class="padat">2</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/975" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/975" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/975/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/975" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/975" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/975" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/975" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/975" id="test" name="975">4315170611050004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">GALANG RAMADHAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/341">4315170910070004 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>CIBURIAL INDAH NO.23</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>16</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="976"></td>
                                <td class="padat">3</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/976" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/976" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/976/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/976" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/976" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/976" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/976" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/976" id="test" name="976">0</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">ARFAN MUHAMMAD TAUFIQ</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/341">4315170910070004 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>CIBURIAL INDAH NO.23</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>0</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>-</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="14562"></td>
                                <td class="padat">4</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14562" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/14562" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/14562/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/14562" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/14562" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/14562" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/14562" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14562" id="test" name="14562">0</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">ARFAN MUHAMMAD TAUFIQ</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/341">4315170910070004 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>CIBURIAL INDAH NO.23</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>0</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>-</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="3029"></td>
                                <td class="padat">5</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3029" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/3029" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3029/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3029" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/3029" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3029" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3029" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3029" id="test" name="3029">4315171501080004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">AGIL LIAHAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/991">4315170910150012 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. CIKUTURUG</td>
                                <td nowrap="">1</td>
                                <td>2</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>13</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="12796"></td>
                                <td class="padat">6</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12796" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/12796" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12796/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12796" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/12796" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12796" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12796" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12796" id="test" name="12796">4315170812020004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMMAD AKHIZ ROYHAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4006">4315170912130005 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">ABDUL GOFUR ALM</td>
                                <td nowrap="">SULASTRI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. BUKIT PAKAR UTARA 22</td>
                                <td nowrap="">3</td>
                                <td>8</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>18</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="9858"></td>
                                <td class="padat">7</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9858" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/9858" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/9858/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/9858" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/9858" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/9858" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/9858" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9858" id="test" name="9858">4315170209050002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMAD FAJAR FADILAH</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3077">4315170912140001 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. KORDON</td>
                                <td nowrap="">2</td>
                                <td>6</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>16</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="6724"></td>
                                <td class="padat">8</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/6724" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/6724" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/6724/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/6724" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/6724" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/6724" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/6724" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/6724" id="test" name="6724">4315172511040005</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMMAD RIZKY SYAHPUTRA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2120">4315171002150008 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">YUDI FIRDAUS</td>
                                <td nowrap="">NOVIRA SARI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. TERUSAN RANCAKENDAL NO.9</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>16</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="4711"></td>
                                <td class="padat">9</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4711" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/4711" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4711/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4711" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/4711" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4711" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4711" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4711" id="test" name="4711">3273012108060005</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">KEVIN NAZHZHRIL AZHAR</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1504">4315171003140018 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">IR. IRDEZ AZHAR, M.SC</td>
                                <td nowrap="">DR. R.YOHANA</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. LEMBAH PAKAR TIMUR IV F-1</td>
                                <td nowrap="">1</td>
                                <td>3</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>15</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="4712"></td>
                                <td class="padat">10</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4712" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/4712" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4712/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4712" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/4712" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4712" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4712" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4712" id="test" name="4712">3273010305080003</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">VICENZO SHAQUILLE AZHAR</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1504">4315171003140018 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. LEMBAH PAKAR TIMUR IV F-1</td>
                                <td nowrap="">1</td>
                                <td>3</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>13</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="2728"></td>
                                <td class="padat">11</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/2728" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/2728" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/2728/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/2728" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/2728" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/2728" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/2728" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/2728" id="test" name="2728">4315170711060003</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMMAD RIZKIA DWI. H. B</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/895">4315171005120025 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KMP. CIKURUTUG</td>
                                <td nowrap="">1</td>
                                <td>2</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>15</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="11054"></td>
                                <td class="padat">12</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11054" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/11054" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/11054/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/11054" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/11054" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/11054" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/11054" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11054" id="test" name="11054">4315170512070001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">M. ARDHI FIRDAUS AMKA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3455">4315171006080013 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">ACENG MUKROM KARIMUDIN. A</td>
                                <td nowrap="">NUNUNG SARININGSIH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. CIRAPUHAN</td>
                                <td nowrap="">2</td>
                                <td>6</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>13</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="12313"></td>
                                <td class="padat">13</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12313" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/12313" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12313/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12313" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/12313" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12313" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12313" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12313" id="test" name="12313">4315171201070003</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">DITYO NUGROHO</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3848">4315171006080069 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">RATIMUN TRI PAMUNGKAS</td>
                                <td nowrap="">SITI MARYAM</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. PAKAR BARAT II</td>
                                <td nowrap="">3</td>
                                <td>7</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>14</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="7113"></td>
                                <td class="padat">14</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7113" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/7113" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7113/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7113" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/7113" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7113" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7113" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7113" id="test" name="7113">4315171009120004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMMAD ZAMZAM MUBAROK</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2241">4315171006110001 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">JEJEN JAENUDIN</td>
                                <td nowrap="">LIA JUMROTUL ALIYAH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>SEKEPICUNG JL. RANCAKENDAL LU</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>9</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="1859"></td>
                                <td class="padat">15</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1859" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/1859" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/1859/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/1859" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/1859" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/1859" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/1859" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1859" id="test" name="1859">4315171907100002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">NAZILAH REKSA PUTRA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/629">4315171007120004 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. BARIBIS</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>11</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="1608"></td>
                                <td class="padat">16</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1608" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/1608" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/1608/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/1608" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/1608" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/1608" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/1608" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1608" id="test" name="1608">4315172903090005</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMMAD RASHIF. MAULIDAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/544">4315171007120005 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. BARIBIS</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>12</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="1864"></td>
                                <td class="padat">17</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1864" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/1864" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/1864/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/1864" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/1864" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/1864" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/1864" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1864" id="test" name="1864">4315172201080005</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">SYAHRUL GUNAWAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/630">4315171007120006 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. BARIBIS</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>13</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="1612"></td>
                                <td class="padat">18</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1612" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/1612" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/1612/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/1612" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/1612" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/1612" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/1612" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1612" id="test" name="1612">4315171901040001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">ARIO AFRIJAL PRATAMA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/545">4315171007120007 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. BARIBIS</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>17</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="2227"></td>
                                <td class="padat">19</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/2227" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/2227" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/2227/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/2227" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/2227" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/2227" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/2227" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/2227" id="test" name="2227">4315170905050005</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MOZHA ZAINI AFFNAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/745">4315171010060015 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">AMINUDIN</td>
                                <td nowrap="">BUDIARSIH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. CIBURIAL KP. LEBAK SIUH</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>5</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>16</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="8532"></td>
                                <td class="padat">20</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8532" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/8532" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/8532/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/8532" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/8532" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/8532" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/8532" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8532" id="test" name="8532">0</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">GHINAN NAFSI AQIL</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2677">4315171012120006 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP.SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>0</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>-</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="8535"></td>
                                <td class="padat">21</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8535" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/8535" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/8535/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/8535" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/8535" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/8535" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/8535" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8535" id="test" name="8535">0</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">JESY AKYAS AL ANSORI</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2677">4315171012120006 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP.SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>0</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>-</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="14764"></td>
                                <td class="padat">22</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14764" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/14764" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/14764/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/14764" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/14764" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/14764" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/14764" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14764" id="test" name="14764">0</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">GHINAN NAFSI AQIL</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2677">4315171012120006 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP.SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>0</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>-</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="14767"></td>
                                <td class="padat">23</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14767" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/14767" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/14767/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/14767" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/14767" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/14767" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/14767" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14767" id="test" name="14767">0</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">JESY AKYAS AL ANSORI</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2677">4315171012120006 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP.SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>0</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>-</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="11454"></td>
                                <td class="padat">24</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11454" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/11454" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/11454/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/11454" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/11454" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/11454" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/11454" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11454" id="test" name="11454">4315170112160003</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">EDJA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3576">4315171104070023 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>PAKAR BARAT NO.10</td>
                                <td nowrap="">3</td>
                                <td>7</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>4</td>
                                <td>PENSIUNAN</td>
                                <td nowrap="">KAWIN TERCATAT</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="7116"></td>
                                <td class="padat">25</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7116" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/7116" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7116/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7116" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/7116" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7116" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7116" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7116" id="test" name="7116">4315170709030001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">FARID SETIADI</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2242">4315171104120002 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SEKEPICUNG JL. RANCAKENDAL</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>18</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="12318"></td>
                                <td class="padat">26</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12318" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/12318" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12318/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12318" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/12318" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12318" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12318" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12318" id="test" name="12318">4315173001040005</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">D. O. HERMAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3849">4315171105060019 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">UYEK SUHERMAN</td>
                                <td nowrap="">YANI SURYANI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>PAKAR BARAT NO.92</td>
                                <td nowrap="">3</td>
                                <td>7</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>17</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="7829"></td>
                                <td class="padat">27</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7829" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/7829" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7829/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7829" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/7829" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7829" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7829" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7829" id="test" name="7829">4315171607030004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">AJIDUL FAJAR</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2461">4315171105070007 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>18</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="7830"></td>
                                <td class="padat">28</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7830" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/7830" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7830/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7830" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/7830" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7830" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7830" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7830" id="test" name="7830">4315171607030003</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">AJIDUL FAJAR</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2461">4315171105070007 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">ADIN HAMBALI</td>
                                <td nowrap="">AYI SURYAMAH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>18</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="4132"></td>
                                <td class="padat">29</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4132" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/4132" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4132/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4132" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/4132" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4132" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4132" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4132" id="test" name="4132">4315172302080002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">RAKA PUTRA FERDIANSYAH</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1328">4315171105070038 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">IYANG IMAMI SAEPUDIN</td>
                                <td nowrap="">OON DEWI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SINGAGATI</td>
                                <td nowrap="">1</td>
                                <td>3</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>13</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="12824"></td>
                                <td class="padat">30</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12824" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/12824" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12824/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12824" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/12824" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12824" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12824" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12824" id="test" name="12824">4315173012070002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">DEWANA ANGEL YOGA. N</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4015">4315171105070057 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>BUKIT PAKAR UTARA</td>
                                <td nowrap="">3</td>
                                <td>8</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>13</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="3033"></td>
                                <td class="padat">31</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3033" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/3033" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3033/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3033" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/3033" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3033" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3033" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3033" id="test" name="3033">4315170308040001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">KAISHA GUSTIRA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/992">4315171105070066 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. CIKURUTUG NO.33</td>
                                <td nowrap="">1</td>
                                <td>2</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>17</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="999"></td>
                                <td class="padat">32</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/999" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/999" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/999/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/999" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/999" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/999" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/999" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/999" id="test" name="999">4315172011050007</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMMAD ARAFAH FADILLAH</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/350">4315171105070070 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>BABAKAN CIBURIAL</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>15</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="12328"></td>
                                <td class="padat">33</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12328" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/12328" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12328/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12328" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/12328" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12328" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12328" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12328" id="test" name="12328">4315170304100003</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">WIRA ARDILA FAZZA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3852">4315171105070076 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">YANA RUSYANA</td>
                                <td nowrap="">DEWI SARTIKA</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. PAKAR BARAT II</td>
                                <td nowrap="">3</td>
                                <td>7</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>11</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="1003"></td>
                                <td class="padat">34</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1003" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/1003" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/1003/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/1003" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/1003" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/1003" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/1003" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1003" id="test" name="1003">4315170611990007</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">DIMAS DONY SYAHPUTRA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/351">4315171105070088 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>BABAKAN</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>22</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="4166"></td>
                                <td class="padat">35</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4166" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/4166" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4166/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4166" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/4166" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4166" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4166" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4166" id="test" name="4166">4315172306020004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">ANWAR RISYADI</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1337">4315171105070133 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">ADIN SUHENDRA</td>
                                <td nowrap="">EULIS KARWATI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SINGAGATI</td>
                                <td nowrap="">1</td>
                                <td>3</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>19</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="13224"></td>
                                <td class="padat">36</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/13224" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/13224" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/13224/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/13224" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/13224" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/13224" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/13224" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/13224" id="test" name="13224">4315172309030002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">AGUS GUNAWAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4150">4315171105070147 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">AHYAR</td>
                                <td nowrap="">ODAH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>PAKAR BARAT</td>
                                <td nowrap="">3</td>
                                <td>8</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>18</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="2281"></td>
                                <td class="padat">37</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/2281" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/2281" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/2281/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/2281" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/2281" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/2281" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/2281" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/2281" id="test" name="2281">4315172411090002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">ALVIN NOUVAL FAUZY</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/761">4315171107120025 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>LEBAK SIUH</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>5</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>11</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="5309"></td>
                                <td class="padat">38</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/5309" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/5309" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/5309/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/5309" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/5309" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/5309" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/5309" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/5309" id="test" name="5309">4315172312120001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">ALVA DARREL FAEYZA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1679">4315171110170003 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">LUTFI YULINA FIRDAUS</td>
                                <td nowrap="">DESY ROSILAWATI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. LEMBAH PAKAR TIMUR NO. 24</td>
                                <td nowrap="">1</td>
                                <td>4</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>8</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="8553"></td>
                                <td class="padat">39</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8553" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/8553" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/8553/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/8553" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/8553" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/8553" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/8553" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8553" id="test" name="8553">4315172101090004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">FAZRI PUTRI PERMANA. PSN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2683">4315171111160014 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">LUKMANUL HAKIM</td>
                                <td nowrap="">SITI SADIAH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>12</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="9210"></td>
                                <td class="padat">40</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9210" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/9210" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/9210/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/9210" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/9210" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/9210" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/9210" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9210" id="test" name="9210">4315171710050002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">FAUZUL ROHMAT</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2885">4315171112140011 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">EMAN SULAEMAN</td>
                                <td nowrap="">KURNIA WATI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. CIRAHAYU</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>5</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>16</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="1886"></td>
                                <td class="padat">41</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1886" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/1886" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/1886/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/1886" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/1886" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/1886" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/1886" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1886" id="test" name="1886">4315170909300001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">ILI</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/638">4315171201110013 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. BARIBIS</td>
                                <td nowrap="">1</td>
                                <td>1</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>91</td>
                                <td>PETANI/PEKEBUN</td>
                                <td nowrap="">KAWIN TERCATAT</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="14039"></td>
                                <td class="padat">42</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14039" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/14039" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/14039/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/14039" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/14039" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/14039" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/14039" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14039" id="test" name="14039">4315170611100001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">REYHAN MAULANA PUTRA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4413">4315171202070004 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">PENDI ZAYUSMAN</td>
                                <td nowrap="">ENTIN KARTINI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SEKEJOLANG</td>
                                <td nowrap="">4</td>
                                <td>9</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>11</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="9228"></td>
                                <td class="padat">43</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9228" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/9228" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/9228/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/9228" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/9228" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/9228" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/9228" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9228" id="test" name="9228">4315172702120004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">WILDAN BAGJA NUGRAHA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2889">4315171203120009 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">ASEP SOLEHUDIN</td>
                                <td nowrap="">ANISAH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JLN. RANCAKENDAL LUHUR KP. SEK</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>5</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>9</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="7841"></td>
                                <td class="padat">44</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7841" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/7841" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7841/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7841" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/7841" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7841" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7841" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7841" id="test" name="7841">3211113110060004</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">DEVALDY SHAFPUTRA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2464">4315171203150022 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">ADI SHAFRUDIN</td>
                                <td nowrap="">TRI KOMALA</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. RAYA GOLF KP. SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>3</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>15</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="8557"></td>
                                <td class="padat">45</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8557" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/8557" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/8557/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/8557" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/8557" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/8557" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/8557" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/8557" id="test" name="8557">4315170909080003</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">NAZRIL RAMDANI</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2684">4315171204060010 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">UJANG AHMAD</td>
                                <td nowrap="">YUNENGSIH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>4</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>13</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="11498"></td>
                                <td class="padat">46</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11498" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/11498" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/11498/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/11498" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/11498" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/11498" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/11498" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11498" id="test" name="11498">4315172707090001</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMAD SIDNI ILHAM</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3589">4315171205060015 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. PAKAR BARAT I</td>
                                <td nowrap="">3</td>
                                <td>7</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>12</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="9875"></td>
                                <td class="padat">47</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9875" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/9875" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/9875/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/9875" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/9875" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/9875" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/9875" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9875" id="test" name="9875">4315171804060002</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">DENIS RAHMAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3087">4315171205140019 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">IYEF</td>
                                <td nowrap="">NANI HERMAWATI</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. PAKAR BARAT NO.77 BANDUNG</td>
                                <td nowrap="">2</td>
                                <td>6</td>
                                <td>1</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>15</td>
                                <td>BELUM/TIDAK BEKERJA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="7132"></td>
                                <td class="padat">48</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7132" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/7132" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7132/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7132" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/7132" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7132" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7132" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7132" id="test" name="7132">4315172404100006</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUHAMMAD WAHYU ALGY FAHRY</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2247">4315171206080004 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">SUMINTO</td>
                                <td nowrap="">YULIA</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SEKEPICUNG</td>
                                <td nowrap="">2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>11</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="11925"></td>
                                <td class="padat">49</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11925" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/11925" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/11925/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/11925" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/11925" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/11925" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/11925" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11925" id="test" name="11925">4315173112980006</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">MUKTI RAMADHAN</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3720">4315171206080006 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">MAMAN PRIBAWANA</td>
                                <td nowrap="">POPON WIARSIH</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>JL. KP. PAKAR BARAT</td>
                                <td nowrap="">3</td>
                                <td>7</td>
                                <td>2</td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>22</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                      <tr>
                                <td class="padat"><input type="checkbox" name="id_cb[]" value="5762"></td>
                                <td class="padat">50</td>
                                <td class="aksi">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/detail/1/0/5762" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                      </li>
                                                                                                            <li>
                                          <a href="https://demo.opensid.or.id/penduduk/form/1/0/5762" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/5762/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/5762" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/dokumen/5762" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                        </li>
                                        <li>
                                          <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/5762" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                        </li>
                                                                              <li>
                                            <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/5762" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                          </li>
                                                                                                          </ul>
                                  </div>
                                </td>
                                <td class="padat">
                                  <div class="user-panel">
                                    <div class="image2">
                                      <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/kuser.png">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="https://demo.opensid.or.id/penduduk/detail/1/0/5762" id="test" name="5762">4315170505000017</a>
                                </td>
                                <td nowrap=""></td>
                                <td nowrap="">SUPRIATNA</td>
                                <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1834">4315171206080023 </a></td>
                                <!-- tambah kolom orang tua-->
                                <td nowrap="">-</td>
                                <td nowrap="">-</td>
                                <!-- tambah kolom orang tua-->
                                <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                                <td>KP. SEKEBULUH</td>
                                <td nowrap=""></td>
                                <td></td>
                                <td></td>
                                <td>BELUM TAMAT SD/SEDERAJAT</td>
                                <td>21</td>
                                <td>PELAJAR/MAHASISWA</td>
                                <td nowrap="">BELUM KAWIN</td>
                                <td>08 November 2021</td>
                                <td>08 November 2021</td>
                              </tr>
                                                                      </tbody>
                      </table>
                    </div>
                  <input type="hidden" name="sidcsrf" value="b9f7dab7156133028029b00d5b2a5c2b"></form>
                  
    <div class="row paging">
      <div class="col-sm-3 dataTables_length">
        <form class="form-horizontal" id="paging" action="https://demo.opensid.or.id/penduduk" method="POST">
          <label>
            Tampilkan
            <select class="form-control input-sm" name="per_page" onchange="$('#paging').submit()">
                          <option value="50" selected="selected">50</option>
                          <option value="100">100</option>
                          <option value="200">200</option>
                      </select>
            Dari <strong>518</strong> Total Data
          </label>
        <input type="hidden" name="sidcsrf" value="b9f7dab7156133028029b00d5b2a5c2b"></form>
      </div>
      <div class="col-sm-9 dataTables_paginate">
        <ul class="pagination">
                  <li class="disabled"><a href="https://demo.opensid.or.id/penduduk/index/1/0#" aria-label="First"><span aria-hidden="true">Awal</span></a></li>
                              <li class="active"><a href="https://demo.opensid.or.id/penduduk/index">1</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/2/0">2</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/3/0">3</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/4/0">4</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/5/0">5</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/6/0">6</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/7/0">7</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/8/0">8</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/9/0">9</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/10/0">10</a></li>
                  <li><a href="https://demo.opensid.or.id/penduduk/index/11/0">11</a></li>
                        <li><a href="https://demo.opensid.or.id/penduduk/index/2/0" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        <li><a href="https://demo.opensid.or.id/penduduk/index/11/0" aria-label="Last"><span aria-hidden="true">Akhir</span></a></li>
              </ul>
      </div>
    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

   <div class="box">
     <div class="box-header">
       <h3 class="box-title">Data Table With Full Features</h3>
     </div>
     <!-- /.box-header -->
     <div class="box-body">
       <table id="example1" class="table table-bordered table-striped">
         <thead>
         <tr>
           <th>NO</th>
           <th>#ID</th>
           <th>NAMA</th>
           <th>KK</th>
           <th>AKSI</th>
         </tr>
         </thead>
         <tbody>
          <?php 
          $no = 1;
          foreach($data_siswa as $row)
          {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['kk']."</td>";
            echo "<td>
            <input type='button' name='view' value='View' data-id='".$row['id']."' class='btn btn-info btn-xs view_data'>
            <a class='btn btn-info btn-xs' href='edit-penduduk.php?id=".$row['id']."'>Update</a>
            <a class='btn btn-danger btn-xs' href='penduduk.php?hapus_siswa=".$row['id']."' onclick='return confirm(".'Are you sure'.")'>Hapus</a></td>";
            echo "</tr>";
            $no++;
          }
             ?>
         </tbody>
       </table>
     </div>
     <!-- /.box-body -->
   </div>
   <!-- /.box -->

   <div id="dataModal" class="modal fade">  
       <div class="modal-dialog">  
            <div class="modal-content">  
                 <div class="modal-header">  
                      <h4 class="modal-title">Detail User</h4>  
                 </div>  
                 <div class="modal-body" id="detail_user">  
                 </div>  
                 <div class="modal-footer">  
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                 </div>  
            </div>  
       </div>  
   </div> 

  </section>
  <!-- /.content -->
</div>

<?php
  include 'footer.php';
?>