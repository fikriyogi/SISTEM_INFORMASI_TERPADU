
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
  <section class="content" id="maincontent">
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
                                                <option value="1">Laki-laki</option>
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
                  <div class="table-responsive table-min-height">
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
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="9092"></td>
                              <td class="padat">1</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9092" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/9092" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/9092/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/9092" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/9092" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/9092" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/9092" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/9092" id="test" name="9092">3204030102880003</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ATIP</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/0"> </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td></td>
                              <td nowrap="">2</td>
                              <td>5</td>
                              <td>4</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>33</td>
                              <td>BURUH HARIAN LEPAS</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="11859"></td>
                              <td class="padat">2</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11859" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/11859" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/11859/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/11859" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/11859" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/11859" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/11859" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11859" id="test" name="11859">4315176008770008</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">NENENG AWANGSIH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3702">4315170908120032 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. PAKAR BARAT I NO. 54</td>
                              <td nowrap="">3</td>
                              <td>7</td>
                              <td>2</td>
                              <td>SLTP/SEDERAJAT</td>
                              <td>44</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="11860"></td>
                              <td class="padat">3</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11860" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/11860" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/11860/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/11860" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/11860" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/11860" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/11860" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/11860" id="test" name="11860">4315171908120002</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ROFI NANDA ALMUSTOFA</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3702">4315170908120032 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. PAKAR BARAT I NO. 54</td>
                              <td nowrap="">3</td>
                              <td>7</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>9</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="11861"></td>
                              <td class="padat">4</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
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
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="10317"></td>
                              <td class="padat">5</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10317" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/10317" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/10317/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/10317" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/10317" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/10317" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/10317" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10317" id="test" name="10317">4315171507860002</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">AR RIZAL MHD ASSUBKY</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3234">4315170908120033 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIKAHURIPAN</td>
                              <td nowrap="">2</td>
                              <td>6</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>35</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="10318"></td>
                              <td class="padat">6</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10318" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/10318" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/10318/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/10318" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/10318" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/10318" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/10318" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10318" id="test" name="10318">4315171002810004</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ANDRY EZZUL HAQ</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3234">4315170908120033 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIKAHURIPAN</td>
                              <td nowrap="">2</td>
                              <td>6</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>40</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="10319"></td>
                              <td class="padat">7</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10319" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/10319" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/10319/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/10319" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/10319" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/10319" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/10319" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10319" id="test" name="10319">4315172009520002</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">EMAN SULAEMAN</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3235">4315170909060003 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">SANUDI ALM</td>
                              <td nowrap="">MIMI</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIRAPUHAN NO.50</td>
                              <td nowrap="">2</td>
                              <td>6</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>69</td>
                              <td>BURUH HARIAN LEPAS</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="10320"></td>
                              <td class="padat">8</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10320" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/10320" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/10320/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/10320" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/10320" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/10320" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/10320" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10320" id="test" name="10320">4315175507570007</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ENAH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3235">4315170909060003 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIRAPUHAN NO.50</td>
                              <td nowrap="">2</td>
                              <td>6</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>64</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="10321"></td>
                              <td class="padat">9</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10321" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/10321" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/10321/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/10321" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/10321" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/10321" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/10321" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/10321" id="test" name="10321">4315172808910002</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ANDRI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3235">4315170909060003 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIRAPUHAN NO.50</td>
                              <td nowrap="">2</td>
                              <td>6</td>
                              <td>2</td>
                              <td>SLTA / SEDERAJAT</td>
                              <td>30</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4981"></td>
                              <td class="padat">10</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4981" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4981" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4981/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4981" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4981" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4981" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4981" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4981" id="test" name="4981">4315171702560001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">EMAN</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1584">4315170909060007 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">SADRI (ALM)</td>
                              <td nowrap="">IDAH (ALM)</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIBURIAL</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>4</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>65</td>
                              <td>BURUH HARIAN LEPAS</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="13196"></td>
                              <td class="padat">11</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/13196" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/13196" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/13196/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/13196" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/13196" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/13196" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/13196" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/13196" id="test" name="13196">4315172302960001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ALI AHMADI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4142">4315170909130005 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>PAKAR BARAT</td>
                              <td nowrap="">3</td>
                              <td>8</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>25</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="14216"></td>
                              <td class="padat">12</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14216" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/14216" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/14216/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/14216" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/14216" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/14216" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/14216" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14216" id="test" name="14216">3273070607780002</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">SUHENDI MULYANA</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4478">4315170909150001 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">ATANG SUKMARA</td>
                              <td nowrap="">ANISA</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. SEKEJOLANG</td>
                              <td nowrap="">4</td>
                              <td>9</td>
                              <td>2</td>
                              <td>SLTA / SEDERAJAT</td>
                              <td>43</td>
                              <td>BURUH HARIAN LEPAS</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="14217"></td>
                              <td class="padat">13</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14217" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/14217" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/14217/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/14217" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/14217" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/14217" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/14217" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14217" id="test" name="14217">4315174110800005</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ISAH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4478">4315170909150001 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">SALEH</td>
                              <td nowrap="">DEDE IROS</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. SEKEJOLANG</td>
                              <td nowrap="">4</td>
                              <td>9</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>41</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="14218"></td>
                              <td class="padat">14</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14218" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/14218" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/14218/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/14218" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/14218" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/14218" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/14218" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/14218" id="test" name="14218">4315175411070001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">SUSILAWATI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/4478">4315170909150001 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. SEKEJOLANG</td>
                              <td nowrap="">4</td>
                              <td>9</td>
                              <td>2</td>
                              <td>BELUM TAMAT SD/SEDERAJAT</td>
                              <td>13</td>
                              <td>PELAJAR/MAHASISWA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="967"></td>
                              <td class="padat">15</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/967" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/967" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/967/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/967" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/967" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/967" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/967" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/967" id="test" name="967">4315172503860003</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">CEPI GUNAEPI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/339">4315170909150003 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. BABAKAN</td>
                              <td nowrap="">1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>SLTP/SEDERAJAT</td>
                              <td>35</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="968"></td>
                              <td class="padat">16</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/968" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/968" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/968/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/968" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/968" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/968" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/968" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/968" id="test" name="968">4315171807890002</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ABDURAHMAN</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/340">4315170909150004 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/2">530612201300002</a></td>
                              <td>KP. BABAKAN</td>
                              <td nowrap="">1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>SLTP/SEDERAJAT</td>
                              <td>32</td>
                              <td>KARYAWAN SWASTA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="969"></td>
                              <td class="padat">17</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/969" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/969" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/969/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/969" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/969" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/969" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/969" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/969" id="test" name="969">4315174612100004</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">VIONA RAHMAWATI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/340">4315170909150004 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/2">530612201300002</a></td>
                              <td>KP. BABAKAN</td>
                              <td nowrap="">1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>10</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="7105"></td>
                              <td class="padat">18</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7105" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/7105" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7105/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7105" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/7105" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7105" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7105" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7105" id="test" name="7105">4315171304780007</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">YUSNADI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2239">4315170909150005 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">NURHIBIN</td>
                              <td nowrap="">MISRIAH</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. SEKEPICUNG</td>
                              <td nowrap="">2</td>
                              <td>5</td>
                              <td>2</td>
                              <td>SLTP/SEDERAJAT</td>
                              <td>43</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="7106"></td>
                              <td class="padat">19</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7106" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/7106" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7106/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7106" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/7106" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7106" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7106" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7106" id="test" name="7106">4315174406870001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">RINI SUKARTI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2239">4315170909150005 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">PEPEN</td>
                              <td nowrap="">DADAH</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. SEKEPICUNG</td>
                              <td nowrap="">2</td>
                              <td>5</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>34</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="3344"></td>
                              <td class="padat">20</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3344" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/3344" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3344/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3344" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/3344" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3344" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3344" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3344" id="test" name="3344">4315170707750012</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">AKUN</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1086">4315170910060014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. PASIR IPIS</td>
                              <td nowrap="">1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>46</td>
                              <td>WIRASWASTA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="3345"></td>
                              <td class="padat">21</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3345" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/3345" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3345/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3345" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/3345" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3345" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3345" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3345" id="test" name="3345">4315175504770013</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">NINING</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1086">4315170910060014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. PASIR IPIS</td>
                              <td nowrap="">1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>SLTP/SEDERAJAT</td>
                              <td>44</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="3346"></td>
                              <td class="padat">22</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3346" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/3346" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3346/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3346" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/3346" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3346" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3346" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3346" id="test" name="3346">4315172103950005</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ANDI SUPRIATNA</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1086">4315170910060014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">AKUN</td>
                              <td nowrap="">NINING WARNINGSIH</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. PASIR IPIS</td>
                              <td nowrap="">1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>SLTA / SEDERAJAT</td>
                              <td>26</td>
                              <td>JURU MASAK</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="3347"></td>
                              <td class="padat">23</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3347" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/3347" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3347/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3347" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/3347" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3347" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3347" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3347" id="test" name="3347">4315170410120005</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">MUHAMMAD RIZKY RAHAYU</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1086">4315170910060014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">AKUN</td>
                              <td nowrap="">NINING WARNINGSIH</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. PASIR IPIS</td>
                              <td nowrap="">1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>9</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="970"></td>
                              <td class="padat">24</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/970" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/970" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/970/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/970" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/970" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/970" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/970" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/970" id="test" name="970">4315172901610001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ISHAK IJUDIN</td>
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
                              <td>DIPLOMA I / II</td>
                              <td>60</td>
                              <td>KARYAWAN SWASTA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="971"></td>
                              <td class="padat">25</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/971" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/971" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/971/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/971" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/971" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/971" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/971" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/971" id="test" name="971">4315174203660001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">MASPUPAH</td>
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
                              <td>DIPLOMA I / II</td>
                              <td>55</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="972"></td>
                              <td class="padat">26</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/972" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/972" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/972/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/972" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/972" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/972" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/972" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/972" id="test" name="972">4315174303010011</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">FIRDA SALSABILA NURATU</td>
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
                              <td>SLTP/SEDERAJAT</td>
                              <td>20</td>
                              <td>PELAJAR/MAHASISWA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="973"></td>
                              <td class="padat">27</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/973" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/973" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/973/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/973" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/973" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/973" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/973" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/973" id="test" name="973">4315170303950008</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">NUFAIL AHMAD FAUZAN</td>
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
                              <td>SLTA / SEDERAJAT</td>
                              <td>26</td>
                              <td>PELAJAR/MAHASISWA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="974"></td>
                              <td class="padat">28</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/974" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/974" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/974/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/974" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/974" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/974" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/974" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/974" id="test" name="974">4315175209960004</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">SHIVA NATASYA NURATU</td>
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
                              <td>SLTA / SEDERAJAT</td>
                              <td>25</td>
                              <td>PELAJAR/MAHASISWA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="975"></td>
                              <td class="padat">29</td>
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
                              <td class="padat">30</td>
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
                              <td class="padat">31</td>
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
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="977"></td>
                              <td class="padat">32</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/977" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/977" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/977/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/977" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/977" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/977" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/977" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/977" id="test" name="977">4315171808790013</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">DINDA DARUL MANAN</td>
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
                              <td>SLTA / SEDERAJAT</td>
                              <td>42</td>
                              <td>KARYAWAN SWASTA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="7806"></td>
                              <td class="padat">33</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7806" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/7806" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7806/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7806" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/7806" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7806" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7806" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7806" id="test" name="7806">4315174112510006</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">A. ROHAYATI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2454">4315170910070012 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. RAYA GOLF 96</td>
                              <td nowrap="">2</td>
                              <td>5</td>
                              <td>3</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>69</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="7107"></td>
                              <td class="padat">34</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7107" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/7107" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7107/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7107" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/7107" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7107" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7107" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7107" id="test" name="7107">4315171205350003</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">JUNAEDI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2240">4315170910080030 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">IYO</td>
                              <td nowrap="">IMING</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. SEKEPICUNG</td>
                              <td nowrap="">2</td>
                              <td>5</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>86</td>
                              <td>BURUH HARIAN LEPAS</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="7108"></td>
                              <td class="padat">35</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7108" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/7108" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/7108/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/7108" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/7108" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/7108" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/7108" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/7108" id="test" name="7108">4315175506480007</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">MAMAH MARYATI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/2240">4315170910080030 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. SEKEPICUNG</td>
                              <td nowrap="">2</td>
                              <td>5</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>73</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="12605"></td>
                              <td class="padat">36</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12605" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/12605" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12605/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12605" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/12605" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12605" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12605" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12605" id="test" name="12605">4315171507830005</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">JULIES NUR HIDAYAHNTO</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3944">4315170910120014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">DEDE SYARIF HIDAYAT SP</td>
                              <td nowrap="">SITI SUHARTI</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KOMP. PLTA BENGKOK NO. 14</td>
                              <td nowrap="">3</td>
                              <td>7</td>
                              <td>4</td>
                              <td>DIPLOMA IV/ STRATA I</td>
                              <td>38</td>
                              <td>KARYAWAN SWASTA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="12606"></td>
                              <td class="padat">37</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12606" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/12606" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12606/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12606" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/12606" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12606" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12606" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12606" id="test" name="12606">4315176801850004</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">RINNI ADYTIANI SOMANTRI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3944">4315170910120014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KOMP. PLTA BENGKOK NO. 14</td>
                              <td nowrap="">3</td>
                              <td>7</td>
                              <td>4</td>
                              <td>DIPLOMA IV/ STRATA I</td>
                              <td>36</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="12607"></td>
                              <td class="padat">38</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12607" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/12607" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12607/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12607" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/12607" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12607" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12607" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12607" id="test" name="12607">4315171401100001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">RADYTIA NUR HIDAYAH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3944">4315170910120014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KOMP. PLTA BENGKOK NO. 14</td>
                              <td nowrap="">3</td>
                              <td>7</td>
                              <td>4</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>11</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="12608"></td>
                              <td class="padat">39</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12608" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/12608" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/12608/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/12608" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/12608" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/12608" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/12608" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/12608" id="test" name="12608">4315175702140001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ANINDYA NUR HIDAYAH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/3944">4315170910120014 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">JULIES NUR HIDAYAHNTO ST</td>
                              <td nowrap="">RINNI ADYTIANI SOMANTRI SE</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KOMP. PLTA BENGKOK NO. 14</td>
                              <td nowrap="">3</td>
                              <td>7</td>
                              <td>4</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>7</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4110"></td>
                              <td class="padat">40</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4110" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4110" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4110/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4110" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4110" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4110" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4110" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4110" id="test" name="4110">4315174906580001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">EVELINE. R. S. KOSASIH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>63</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4114"></td>
                              <td class="padat">41</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4114" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4114" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4114/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4114" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4114" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4114" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4114" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4114" id="test" name="4114">4315175104670001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">NGADIRAH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>54</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4115"></td>
                              <td class="padat">42</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4115" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4115" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4115/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4115" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4115" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4115" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4115" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4115" id="test" name="4115">4315172810640003</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">KUSNADI</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>57</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4116"></td>
                              <td class="padat">43</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4116" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4116" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4116/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4116" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4116" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4116" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4116" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4116" id="test" name="4116">4315172412790002</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">WAWAN HENDRAWAN</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>41</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4117"></td>
                              <td class="padat">44</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4117" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4117" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4117/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4117" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4117" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4117" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4117" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4117" id="test" name="4117">4315176210580001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">BAROKAH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">SUTAMAT</td>
                              <td nowrap="">SAUDAH</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>63</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4111"></td>
                              <td class="padat">45</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4111" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4111" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4111/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4111" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4111" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4111" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4111" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4111" id="test" name="4111">4315170904850001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">RICKY SASTRAPUTERA</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>36</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4112"></td>
                              <td class="padat">46</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4112" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4112" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4112/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4112" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4112" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4112" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4112" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4112" id="test" name="4112">4315172309940003</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">RIO SASTRAPUTERA</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>27</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="4113"></td>
                              <td class="padat">47</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4113" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/4113" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/4113/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/4113" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/4113" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/4113" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/4113" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/4113" id="test" name="4113">4315172011860001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">RAYMOND SASTRAPUTERA</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/1323">4315170910120016 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>JL. BUKIT PAKAR TIMUR IV NO. A 2-6</td>
                              <td nowrap="">1</td>
                              <td>3</td>
                              <td>2</td>
                              <td>TIDAK / BELUM SEKOLAH</td>
                              <td>34</td>
                              <td>BELUM/TIDAK BEKERJA</td>
                              <td nowrap="">BELUM KAWIN</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="1848"></td>
                              <td class="padat">48</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1848" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/1848" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/1848/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/1848" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/1848" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/1848" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/1848" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/1848" id="test" name="1848">4315171011890007</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">SAEPUDIN   ALM</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/625">4315170910150006 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">-</td>
                              <td nowrap="">-</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. BARIBIS</td>
                              <td nowrap="">1</td>
                              <td>1</td>
                              <td>4</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>32</td>
                              <td>BURUH HARIAN LEPAS</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="3026"></td>
                              <td class="padat">49</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3026" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/3026" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3026/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3026" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/3026" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3026" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3026" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3026" id="test" name="3026">4315172902830001</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">SOPIAN AKBAR</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/991">4315170910150012 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">SARKIB</td>
                              <td nowrap="">MIMI</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIKUTURUG</td>
                              <td nowrap="">1</td>
                              <td>2</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>38</td>
                              <td>BURUH HARIAN LEPAS</td>
                              <td nowrap="">KAWIN TERCATAT</td>
                              <td>08 November 2021</td>
                              <td>08 November 2021</td>
                            </tr>
                                                    <tr>
                              <td class="padat"><input type="checkbox" name="id_cb[]" value="3027"></td>
                              <td class="padat">50</td>
                              <td class="aksi">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3027" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                                                                                          <li>
                                        <a href="https://demo.opensid.or.id/penduduk/form/1/0/3027" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/ajax_penduduk_maps/1/0/3027/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/edit_status_dasar/1/0/3027" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/dokumen/3027" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                      </li>
                                      <li>
                                        <a href="https://demo.opensid.or.id/penduduk/cetak_biodata/3027" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                      </li>
                                                                            <li>
                                          <a href="#" data-href="https://demo.opensid.or.id/penduduk/delete/1/0/3027" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                                                                                        </ul>
                                </div>
                              </td>
                              <td class="padat">
                                <div class="user-panel">
                                  <div class="image2">
                                    <img class="img-circle" alt="Foto Penduduk" src="https://demo.opensid.or.id/assets/files/user_pict/wuser.png">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="https://demo.opensid.or.id/penduduk/detail/1/0/3027" id="test" name="3027">4315175505860008</a>
                              </td>
                              <td nowrap=""></td>
                              <td nowrap="">ELI HANAH</td>
                              <td><a href="https://demo.opensid.or.id/keluarga/kartu_keluarga/1/0/991">4315170910150012 </a></td>
                              <!-- tambah kolom orang tua-->
                              <td nowrap="">SUHERMAN</td>
                              <td nowrap="">ENCEH</td>
                              <!-- tambah kolom orang tua-->
                              <td><a href="https://demo.opensid.or.id/rtm/anggota/"></a></td>
                              <td>KP. CIKUTURUG</td>
                              <td nowrap="">1</td>
                              <td>2</td>
                              <td>2</td>
                              <td>TAMAT SD / SEDERAJAT</td>
                              <td>35</td>
                              <td>MENGURUS RUMAH TANGGA</td>
                              <td nowrap="">KAWIN TERCATAT</td>
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
          Dari <strong>10534</strong> Total Data
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
                <li><a href="https://demo.opensid.or.id/penduduk/index/12/0">12</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/13/0">13</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/14/0">14</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/15/0">15</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/16/0">16</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/17/0">17</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/18/0">18</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/19/0">19</a></li>
                <li><a href="https://demo.opensid.or.id/penduduk/index/20/0">20</a></li>
                      <li><a href="https://demo.opensid.or.id/penduduk/index/2/0" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                      <li><a href="https://demo.opensid.or.id/penduduk/index/211/0" aria-label="Last"><span aria-hidden="true">Akhir</span></a></li>
            </ul>
    </div>
  </div>
              </div>
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