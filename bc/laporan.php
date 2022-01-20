<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) {
    $user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=?");
$stmt->execute([$_SESSION['userSession']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);


if(isset($_GET['token'])){
    $id = $_GET['token'];
    $data = $user_home->runQuery("SELECT * FROM siswa WHERE uid=?");
    $data->execute([$id]);
    $row = $data->fetch(PDO::FETCH_ASSOC);
}
else
{
    header('Location: schools.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profil Guru</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="/resources/css/bootstrap-theme.min.css">

  <script type="text/javascript" src="/lib/qrcode/qrcode.js"></script>
  <script type="text/javascript" src="/lib/qrcode/qrcode_SJIS.js"></script>
  <script type="text/javascript" src="/lib/qrcode/sample.js"></script>
  <script type="text/javascript" src="/lib/qrcode/plusone.js"></script>

  <script src="/resources/js/jquery.min.js"></script>
  <script src="/resources/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();

      document.body.innerHTML = originalContents;
    }

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
      } else {
          document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
  </script>
</head>
<style type="text/css">
  DIV.page-header {
    margin: 16px 0px 16px 0px;
  }

  DIV.page-footer {
    margin: 16px 0px 16px 0px;
    text-align: right;
  }

  DIV.section {
    margin: 16px 0px 16px 0px;
  }

  #dataCaps TABLE {
    border-collapse: collapse;
  }

  #dataCaps TABLE,
  #dataCaps TABLE TH,
  #dataCaps TABLE TD {
    margin: 0px;
    padding: 0px 4px 0px 4px;
    border: 1px solid #000000;
  }
</style>
<style type="text/css">
    body {
        background: rgb(204,204,204);
    }
    page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 1cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
    }
    page[size="A4"] {
        width: 21cm;
        /*height: 29.7cm;*/
        font-size: 12px;
        /*width: 29.7cm;
        height: 21cm;*/
        padding: 30px 30px 30px 30px;
    }
    page[size="A4"][layout="landscape"] {
        width: 29.7cm;
        /*height: 21cm;*/
    }
    page[size="A3"] {
        width: 29.7cm;
        height: 42cm;
    }
    page[size="A3"][layout="portrait"] {
        width: 42cm;
        height: 29.7cm;
    }
    page[size="A5"] {
        width: 14.8cm;
        height: 21cm;
    }
    page[size="A5"][layout="portrait"] {
        width: 21cm;
        height: 14.8cm;
    }
    @media print {
        body, page {
            margin: 0;
            box-shadow: 0;
        }
        .no-print, .no-print *
        {
            display: none !important;
        }

        table { page-break-after:auto }
        tr    { page-break-inside:avoid; page-break-after:auto }
        td    { page-break-inside:avoid; page-break-after:auto }
        thead { display:table-header-group }
        tfoot { display:table-footer-group }
    }

    /*table, th {
        border: 1px solid black;
    }*/

    th {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        /*width: 100%;*/
        page-break-inside:auto;
        /*page-break-after:auto;*/
    }

    table tr.vtop td{
        vertical-align: top;
    }

    td{
        padding:3px;
        /*border-top: 1px solid black;
        border-left: 1px solid black;
        border-right: 1px solid black;*/
    }

    td.kosong{
        border-top: #ffffff none 0px;
        border-bottom: #ffffff none 0px;
    }

    hr {
      display: block;
      margin-top: auto;
      margin-bottom: auto;
      margin-left: auto;
      margin-right: auto;
      border-style: inset;
      border-width: 2px;
    }

    p {
       /*text-indent:40px;*/
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    u.isi {
      border-bottom: 1.5px dotted #000;
      text-decoration: none;
    }

    #myBtn {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed/sticky position */
        bottom: 20px; /* Place the button at the bottom of the page */
        right: 30px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        border: none; /* Remove borders */
        outline: none; /* Remove outline */
        background-color: green; /* Set a background color */
        color: white; /* Text color */
        cursor: pointer; /* Add a mouse pointer on hover */
        padding: 15px; /* Some padding */
        border-radius: 10px; /* Rounded corners */
    }

    #myBtn:hover {
        background-color: #555; /* Add a dark-grey background on hover */
    }
</style>
<body>
<br />
<p align="center"><button class="btn btn-primary" onclick="printDiv('formConfirmation')"><i class="fa fa-save no-print"></i>Cetak Dokumen</button></p>
<div id="formConfirmation">
<page size="A4">
  <table width="100%">
          <tr>
        <td width="15%" align="center" valign="center"><img src="/resources/images/tutwurihandayani-hitam.png" width="95" height="95"></td>
        <td align="center">
          <font size="3">
          PEMERINTAH KABUPATEN/KOTA KAMPAR<br>DINAS PENDIDIKAN          </font>
          <br><font size="5"><b><u>SD NEGERI 004 PULAU TERAP</u></b></font>
          <br>NPSN: 10400597, Pulau Terap RT/RW: 003/002 Kec. Kuok Kab. Kampar Prov. Riau          Telp.085278865780 Fax.0 Email: <font color="blue">sdn004pulauterap@gmail.com</font>
          </td>
      </tr>
      <tr>
        <td colspan="2"><hr size=5px></td>
      </tr>
        <tr>
      <td colspan="2" align="center">
        <br>
        <font size="3"><u><b>Profil Guru</b></u></font>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <font size="2pt">Data berikut dikeluarkan melalui aplikasi Dapodik Ditjen Pauddikdasmen pada tanggal 06 Desember 2021 Pukul: 08:36:28</font>
      </td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td colspan="2">
        <font size="2pt">
          <table width="100%" border="1">
            <tbody>
              <tr>
                <th width="25%">Atribut</th>
                <th width="45%">Isian</th>
                <th width="30%">Keterangan</th>
              </tr>
              <tr>
                <td><i>Tanggal Perubahan</i></td>
                <td>2021-11-22 09:55:07</td>
                <td>Diperoleh dari tabel GTK</td>
              </tr>
              <tr>
                <td><i>Sinkronisasi Terakhir</i></td>
                <td>Belum pernah melakukan sinkronisasi</td>
                <td>Diperoleh dari tabel log sinkronisasi</td>
              </tr>
              <tr>
                <td>Nomor Surat Tugas</td>
                <td>821.12/KP/2000/49</td>
                <td rowspan="4">Diperoleh dari tabel penugasan</td>
              </tr>
              <tr>
                <td>Tanggal Surat Tugas</td>
                <td>2000-07-20</td>
              </tr>
              <tr>
                <td>Tahun Ajaran</td>
                <td>2021/2022</td>
              </tr>
              <tr>
                <td>Sekolah Induk</td>
                <td>Ya</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><?php echo $row['nama_siswa']?></td>
                <td></td>
              </tr>
              <tr>
                <td>NIK</td>
                <td>1401054811760001</td>
                <td></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>Perempuan</td>
                <td></td>
              </tr>
              <tr>
                <td>TTL</td>
                <td>Kuok, 08 November 1976</td>
                <td>Tempat dan tanggal lahir</td>
              </tr>
              <tr>
                <td>Nama Ibu Kandung</td>
                <td>Mismar</td>
                <td></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>Jln Melati Bukit Koto Rt/Rw: 3/2 Desa/Kel. Kuok Kec. Kuok Kab. Kampar</td>
                <td></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>Islam</td>
                <td></td>
              </tr>
              <tr>
                <td>Status Perkawinan</td>
                <td>Kawin</td>
                <td></td>
              </tr>
                              <tr>
                  <td>Nama Suami</td>
                  <td>Nasrudin</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Pekerjaan Suami</td>
                  <td>PNS/TNI/Polri</td>
                  <td></td>
                </tr>
                                            <tr>
                <td>NPWP</td>
                <td>148231673221000</td>
                <td></td>
              </tr>
              <tr>
                <td>Nama Wajib Pajak</td>
                <td>Reni Herlina</td>
                <td></td>
              </tr>
              <tr>
                <td>Jenis GTK</td>
                <td>Guru Kelas</td>
                <td></td>
              </tr>
                            <tr>
                <td>NUPTK</td>
                <td>2440754656300053</td>
                <td></td>
              </tr>
                            <tr>
                <td>Status Kepegawaian</td>
                <td>PNS</td>
                <td></td>
              </tr>
                              <tr>
                  <td>NIP</td>
                  <td>197611081998082001</td>
                  <td></td>
                </tr>
                <tr>
                  <td>TMT SK Pengangkatan</td>
                  <td>1998-08-01</td>
                  <td></td>
                </tr>
                                  <tr>
                    <td>SK CPNS</td>
                    <td>SK.813.2/P/98/08</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>TMT CPNS</td>
                    <td>1998-08-01</td>
                    <td></td>
                  </tr>
                                <tr>
                  <td>Sumber Gaji</td>
                  <td>APBN</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Pangkat Golongan</td>
                  <td>IV/a</td>
                  <td rowspan="3">Diperoleh dari tabel riwayat kepangkatan dan riwayat gaji berkala serta TMT yang terbaru</td>
                </tr>
                <tr>
                  <td>TMT Pangkat Golongan</td>
                  <td>2018-10-01</td>
                </tr>
                <tr>
                  <td>Masa Kerja</td>
                  <td>18 tahun</td>
                </tr>
              
              </tbody>
          </table>
        </font>
      </td>
    </tr>
  </table>
  <div style="page-break-after:always;">&nbsp;</div>
  <table width="100%">
    <tr>
      <td colspan="2">
        <font size="2pt">
          <table width="100%" border="1">
            <tbody>
              <tr>
                <th width="25%">Atribut</th>
                <th width="45%">Isian</th>
                <th width="30%">Keterangan</th>
              </tr>
              <tr>
                <td>SK Pengangkatan</td>
                <td>SK.813.2/P/98/08</td>
                <td></td>
              </tr>
              <tr>
                <td>TMT Pengangkatan</td>
                <td>1998-08-01</td>
                <td></td>
              </tr>
              <tr>
                <td>Lembaga Pengangkat</td>
                <td>Pemerintah Pusat</td>
                <td></td>
              </tr>
                              <tr>
                  <td>Kartu Pegawai</td>
                  <td>L.008393</td>
                  <td></td>
                </tr>
                            <tr>
                <td>Kartu Suami</td>
                <td>056513 K</td>
                <td></td>
              </tr>
              <tr>
                <td>Kompetensi dimiliki</td>
                <td>Guru Kelas SD/MI</td>
                <td>Diperoleh dari tabel kompetensi</td>
              </tr>
              <tr>
                <td>Pendidikan Terakhir</td>
                <td>S1 - Pendidikan Kewarganegaraan (Pkn)</td>
                <td rowspan="2">Diperoleh dari tabel riwayat pendidikan formal</td>
              </tr>
              <tr>
                <td>Status Kuliah</td>
                <td>Tidak</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>herlinareni74@gmail.com</td>
                <td>Diperoleh dari akun pengguna</td>
              </tr>
              <tr>
                <td>Tahun Pensiun</td>
                <td>2036</td>
                <td></td>
              </tr>
                            <tr>
                <td>Tugas Tambahan</td>
                <td>[1] PLT Kepala Sekolah (0 jam)<br>[2] Wali Kelas Kelas 4 (2 jam)</td>
                <td rowspan="3" align="justify">Diperoleh dari tabel tugas tambahan yang masih berlaku (TST tidak diisi)<br><br>*) Sesuai Permendikbud 15 Tahun 2018 untuk tugas tambahan lainnya (ekuivalensi) maksimal hanya 6 jam yang dapat diakui</td>
              </tr>
              <tr>
                <td>TMT Tugas Tambahan</td>
                <td>[1] 2020-12-01<br>[2] 2021-08-05</td>
              </tr>
              <!-- <tr>
                <td>TST Tambahan</td>
                <td>[1] </td>
              </tr> -->
              <tr>
                <td>Jumlah Jam Tugas Tambahan</td>
                <td>2 jam</td>
              </tr>
                                                            <tr>
                  <td>Jumlah Jam Mengajar</td>
                  <td>30 jam</td>
                  <td>Diperoleh dari tabel pembelajaran</td>
                </tr>
                                    <tr>
                    <td>Jumlah Jam Mengajar + Jumlah Jam Tugas Tambahan</td>
                    <td>32 jam</td>
                    <td></td>
                  </tr>
                                                            </tbody>
          </table>
        </font>
      </td>
    </tr>
  </table>
    <div style="page-break-after:always;">&nbsp;</div>
    <table width="100%">
      <tr>
      <td><br /><font size="3"><u>Lampiran Rekapitulasi Pembelajaran <b>Reni Herlina</b>:</font></u></td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="1">
          <tbody>
            <tr>
              <th width="5%">No</th>
              <th width="45%">Informasi Rombel</th>
              <th width="35%">Mata Pelajaran</th>
              <th width="15%">Jumlah Jam/Minggu</td>
            </tr>
            <tr><td align='center'>1</td><td>Jenis Rombel: Kelas<br>Tingkat: Kelas 4<br>Nama: Kelas 4<br>Kurikulum: Kurikulum SD 2013<br>Jumlah Anggota Rombel: 15</td><td>401000000 - Matematika (Umum)<br>Kelompok: Matpel Wajib </td><td align='center'>6</td></tr><tr><td align='center'>2</td><td>Jenis Rombel: Kelas<br>Tingkat: Kelas 4<br>Nama: Kelas 4<br>Kurikulum: Kurikulum SD 2013<br>Jumlah Anggota Rombel: 15</td><td>400200000 - Guru Kelas SD/MI/SLB<br>Kelompok: Matpel Wajib </td><td align='center'>24</td></tr>            <tr>
              <td colspan="3" align="center"><b>Jumlah Total Jam Mengajar</b></td>
              <td align="center"><b>30</b></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
      <tr>
      <td>
        <table width="100%" border="0">
          <tr>
            <td align="right">
              <div id="qr"></div>
            </td>
            <td>
              <table align="right" width="60%" border="0">
                <tr>
                  <td>Kab. Kampar, 06 Desember 2021</td>
                </tr>
                <tr>
                  <td>
                    Menyetujui,
                    <br><br><br>
                    <br><br>
                    <u><b>Reni Herlina</b></u>
                    <br>NIP. 197611081998082001                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td align="justify">Catatan:
        <ol>
          <li>Data dalam formulir ini bersifat sangat rahasia, mohon digunakan secara bijak. Menyebarkan data berikut tanpa seizin pemilik data dapat dikenakan sanksi sesuai dengan undang-undang yang berlaku.</li>
                      <li>Untuk kepentingan tunjangan dan aneka kebijakan akan dilakukan validasi dan verifikasi oleh Direktorat Jenderal Guru dan Tenaga Kependidikan, Kemdikbud.</li>
            <li>Kebenaran data merupakan tanggung jawab dari pendidik yang bersangkutan</li>
            <li>Untuk kelompok mata pelajaran <b>muatan sekolah dan tambahan</b> tidak diperhitungkan untuk beban mengajar kecuali Guru BK dan Guru TIK pada Kurikulum 2013</li>
                  </ol>
      </td>
    </tr>
  </table>
</page>
</div>
<button onclick="topFunction()" id="myBtn" title="Kembali ke Atas">Kembali ke Atas</button>
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
<script type="text/javascript">
  document.getElementById('qr').innerHTML = create_qrcode("40430827-8b18-e111-b4f3-73c5429756be==a0dc1274-e90f-4bee-b039-9f9d858c4df5", 8, "L", "Byte", "default");
</script>
</body>
</html>