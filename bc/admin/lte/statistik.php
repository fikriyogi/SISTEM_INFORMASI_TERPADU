
<?php
  include 'header.php';
  include 'menu.php';
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
      <li><a href="#">Forms</a></li>
      <li class="active">Advanced Elements</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" id="maincontent">
    <form id="mainform" name="mainform" method="post">
      <div class="row">
        <div class="col-md-4">
          
<div id="penduduk" class="box box-info 1">
  <div class="box-header with-border">
    <h3 class="box-title">Statistik Penduduk</h3>
    <div class="box-tools">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body no-padding" style="">
    <ul class="nav nav-pills nav-stacked">
              <li><a href="https://demo.opensid.or.id/statistik/clear/13">Umur (Rentang)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/15">Umur (Kategori)</a></li>
              <li class="active"><a href="https://demo.opensid.or.id/statistik/clear/0">Pendidikan Dalam KK</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/14">Pendidikan Sedang Ditempuh</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/1">Pekerjaan</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/2">Status Perkawinan</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/3">Agama</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/4">Jenis Kelamin</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/hubungan_kk">Hubungan Dalam KK</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/5">Warga Negara</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/6">Status Penduduk</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/7">Golongan Darah</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/9">Penyandang Cacat</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/10">Penyakit Menahun</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/16">Akseptor KB</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/17">Akta Kelahiran</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/18">Kepemilikan KTP</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/19">Jenis Asuransi</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/covid">Status Covid</a></li>
          </ul>
  </div>
</div>
<div id="keluarga" class="box box-info collapsed-box">
  <div class="box-header with-border">
    <h3 class="box-title">Statistik Keluarga</h3>
    <div class="box-tools">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    </div>
  </div>
  <div class="box-body no-padding">
    <ul class="nav nav-pills nav-stacked">
              <li><a href="https://demo.opensid.or.id/statistik/clear/kelas_sosial">Kelas Sosial</a></li>
          </ul>
  </div>
</div>
<div id="bantuan" class="box box-info collapsed-box">
  <div class="box-header with-border">
    <h3 class="box-title">Statistik Program Bantuan</h3>
    <div class="box-tools">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    </div>
  </div>
  <div class="box-body no-padding">
    <ul class="nav nav-pills nav-stacked">
              <li><a href="https://demo.opensid.or.id/statistik/clear/bantuan_penduduk">Penerima Bantuan Penduduk</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/bantuan_keluarga">Penerima Bantuan Keluarga</a></li>
                    <li><a href="https://demo.opensid.or.id/statistik/clear/501">BPNT (501)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/502">BLSM (502)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/503">PKH (503)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/504">Bedah Rumah (504)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/505">JAMKESMAS (505)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/506">Almaira Store (506)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/508">BANTUAN LANGSUNG TUNAI BLT-DD (508)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/509">Be el te (509)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/5010">BPNT PPKM (5010)</a></li>
              <li><a href="https://demo.opensid.or.id/statistik/clear/5011">BPNT PPKM (5011)</a></li>
          </ul>
  </div>
</div>
        </div>
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="https://demo.opensid.or.id/statistik/dialog/cetak" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Cetak Laporan" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Laporan"><i class="fa fa-print "></i>Cetak
              </a>
              <a href="https://demo.opensid.or.id/statistik/dialog/unduh" class="btn btn-social btn-flat bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Unduh Laporan" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Laporan"><i class="fa fa-print "></i>Unduh
              </a>
              <a class="btn btn-social btn-flat bg-orange btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block grafikType" title="Grafik Data" id="grafikType" onclick="grafikType();">
                <i class="fa fa-bar-chart"></i>Grafik Data
              </a>
              <a class="btn btn-social btn-flat btn-primary btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block pieType" title="Pie Data" id="pieType" onclick="pieType();">
                <i class="fa fa-pie-chart"></i>Pie Data
              </a>
                            <a href="https://demo.opensid.or.id/statistik/clear/0" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-refresh"></i>Bersihkan Filter</a>
            </div>
            <div class="box-body">
                              <h4 class="box-title text-center"><b>Data Kependudukan Menurut Pendidikan Dalam KK</b></h4>
                            <div id="chart" hidden="true"> </div>
            </div>
            <hr>
            <div class="box-body">
                              <div class="row">
                  <div class="col-sm-12 form-inline">
                    <formid="mainform" method="post">
                      <select class="form-control input-sm " name="dusun" onchange="formAction('mainform','https://demo.opensid.or.id/statistik/dusun')">
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
                                                                
                  </formid="mainform"></div>
                </div>
                              <div class="table-responsive">
                  <table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
                    <thead class="bg-gray color-palette">
                      <tr>
                        <th>No</th>
                                                  <th><a href="https://demo.opensid.or.id/statistik/order_by/0/2">Jenis Kelompok<i class="fa fa-sort-desc fa-sm"></i></a></th>
                                                                          <th colspan="2"><a href="https://demo.opensid.or.id/statistik/order_by/0/5">Jumlah<i class="fa fa-sort fa-sm"></i></a></th>
                                                                          <th colspan="2"><a href="https://demo.opensid.or.id/statistik/order_by/0/3">Laki-Laki<i class="fa fa-sort fa-sm"></i></a></th>
                                                                          <th colspan="2"><a href="https://demo.opensid.or.id/statistik/order_by/0/7">Perempuan<i class="fa fa-sort fa-sm"></i></a></th>
                                              </tr>
                    </thead>
                    <tbody>
                                                                      <tr>
                          <td class="padat">1</td>
                          <td class="text-left">TIDAK / BELUM SEKOLAH</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/1/0" target="_blank">1931</a>
                                                      </td>
                          <td class="text-right">18.33%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/1/1" target="_blank">998</a></td>
                          <td class="text-right">9.47%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/1/2" target="_blank">933</a></td>
                          <td class="text-right">8.86%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">2</td>
                          <td class="text-left">BELUM TAMAT SD/SEDERAJAT</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/2/0" target="_blank">1022</a>
                                                      </td>
                          <td class="text-right">9.70%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/2/1" target="_blank">518</a></td>
                          <td class="text-right">4.92%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/2/2" target="_blank">504</a></td>
                          <td class="text-right">4.78%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">3</td>
                          <td class="text-left">TAMAT SD / SEDERAJAT</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/3/0" target="_blank">3262</a>
                                                      </td>
                          <td class="text-right">30.97%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/3/1" target="_blank">1623</a></td>
                          <td class="text-right">15.41%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/3/2" target="_blank">1639</a></td>
                          <td class="text-right">15.56%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">4</td>
                          <td class="text-left">SLTP/SEDERAJAT</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/4/0" target="_blank">1567</a>
                                                      </td>
                          <td class="text-right">14.88%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/4/1" target="_blank">796</a></td>
                          <td class="text-right">7.56%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/4/2" target="_blank">771</a></td>
                          <td class="text-right">7.32%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">5</td>
                          <td class="text-left">SLTA / SEDERAJAT</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/5/0" target="_blank">2045</a>
                                                      </td>
                          <td class="text-right">19.41%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/5/1" target="_blank">1160</a></td>
                          <td class="text-right">11.01%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/5/2" target="_blank">885</a></td>
                          <td class="text-right">8.40%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">6</td>
                          <td class="text-left">DIPLOMA I / II</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/6/0" target="_blank">67</a>
                                                      </td>
                          <td class="text-right">0.64%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/6/1" target="_blank">23</a></td>
                          <td class="text-right">0.22%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/6/2" target="_blank">44</a></td>
                          <td class="text-right">0.42%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">7</td>
                          <td class="text-left">AKADEMI/ DIPLOMA III/S. MUDA</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/7/0" target="_blank">146</a>
                                                      </td>
                          <td class="text-right">1.39%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/7/1" target="_blank">71</a></td>
                          <td class="text-right">0.67%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/7/2" target="_blank">75</a></td>
                          <td class="text-right">0.71%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">8</td>
                          <td class="text-left">DIPLOMA IV/ STRATA I</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/8/0" target="_blank">418</a>
                                                      </td>
                          <td class="text-right">3.97%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/8/1" target="_blank">221</a></td>
                          <td class="text-right">2.10%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/8/2" target="_blank">197</a></td>
                          <td class="text-right">1.87%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">9</td>
                          <td class="text-left">STRATA II</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/9/0" target="_blank">61</a>
                                                      </td>
                          <td class="text-right">0.58%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/9/1" target="_blank">39</a></td>
                          <td class="text-right">0.37%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/9/2" target="_blank">22</a></td>
                          <td class="text-right">0.21%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat">10</td>
                          <td class="text-left">STRATA III</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/10/0" target="_blank">15</a>
                                                      </td>
                          <td class="text-right">0.14%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/10/1" target="_blank">13</a></td>
                          <td class="text-right">0.12%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/10/2" target="_blank">2</a></td>
                          <td class="text-right">0.02%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat"></td>
                          <td class="text-left">JUMLAH</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/666/0" target="_blank">10534</a>
                                                      </td>
                          <td class="text-right">100.00%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/666/1" target="_blank">5462</a></td>
                          <td class="text-right">51.85%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/666/2" target="_blank">5072</a></td>
                          <td class="text-right">48.15%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat"></td>
                          <td class="text-left">BELUM MENGISI</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/777/0" target="_blank">0</a>
                                                      </td>
                          <td class="text-right">0.00%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/777/1" target="_blank">0</a></td>
                          <td class="text-right">0.00%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/777/2" target="_blank">0</a></td>
                          <td class="text-right">0.00%</td>
                        </tr>
                                                                      <tr>
                          <td class="padat"></td>
                          <td class="text-left">TOTAL</td>
                          <td class="text-right">
                                                                                          <a href="https://demo.opensid.or.id/penduduk/statistik/0/888/0" target="_blank">10534</a>
                                                      </td>
                          <td class="text-right">100.00%</td>
                                                    <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/888/1" target="_blank">5462</a></td>
                          <td class="text-right">51.85%</td>
                          <td class="text-right"><a href="https://demo.opensid.or.id/penduduk/statistik/0/888/2" target="_blank">5072</a></td>
                          <td class="text-right">48.15%</td>
                        </tr>
                                          </tbody>
                  </table>
                </div>
                                              </div>

              
            </div>
          </div>
        </div><input type="hidden" name="sidcsrf" value="b9f7dab7156133028029b00d5b2a5c2b"></form>
      </section>
  <!-- /.content -->
</div>

<?php
  include 'footer.php';
?>