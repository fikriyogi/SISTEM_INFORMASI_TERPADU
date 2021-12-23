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
    $data = $user_home->runQuery("SELECT * FROM siswa, catatan WHERE siswa.uid=:id AND catatan.uid=:id");
    $data->execute([":id" => $id]);
    $row = $data->fetch(PDO::FETCH_ASSOC);
    
}
else
{
    header('Location: schools.php');
}

if (isset($_POST['btn-signup'])) {
    $note = trim($_POST['note']);
    // $code = md5(uniqid(rand()));
    $create_at = date('d-m-Y H:i:s');

    $stmt = $user_home->runQuery("INSERT INTO catatan(uid,note,create_at) VALUES(?,?,?)");
    $stmt->execute([$id, $note, $create_at]);


}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;
charset=utf-8"/>
    <title>LAPORAN BULANAN SEKOLAH</title>
    <link rel="stylesheet" href="https://www.silbdisdikkabkampar.com/css/lap3.css" type="text/css"/>
    <script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("tbody tr:odd").addClass("genap");
            $("tbody tr:even").addClass("ganjil");
        });
    </script>
    <style type="text/css">
        table {
            border: 1px solid #000000;
        }

        thead th {
            background-color: #44D818;
            color: #FFFFFF;
            font: 80%/1.45em "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
        }

        tbody tr {
            font: 80%/1.45em "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
        }

        .genap {
            background: url(#.jpg) repeat-x bottom;
        }

        .ganjil {
            background: url(birumuda.jpg) repeat-x bottom;
        }
    </style>
</head>
</head>
<body>
<div id="wrapper">
    <!--------------- #header --------------->
    <div id="header">
        <h3>Laporan Bulanan Sekolah <I>Online</I> Kabupaten Kampar<br> SD NEGERI 004 PULAU TERAP</h3>
    </div>

    <!--------------- #menu --------------->
    <div id="menu">

        <font color="#00BFFF">INFO GTK 2021</font>
    </div>

    <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading">Tambah Catatan</h2><hr />
        <input type="text" class="input-block-level" placeholder="NOte" name="note" required />
        <hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-signup">Sign Up</button>
    </form>

    <p><?php echo $row['note']?></p>

    <!--------------- #content --------------->
    <div id="content">
        <table width="100%" border="0">

            <table width="100%" border="0" cellspacing="0">
                <tr>
                    <td width="30%">Update Terakhir</td>
                    <td>: 2021-12-02</td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>: <?php echo $row['nama_siswa']?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>: <?php echo $row['nisn']?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <?php echo $row['jk']?></td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>: 196406241985042001</td>
                </tr>
                <tr>
                    <td>Golongan</td>
                    <td>: IV/b</td>
                </tr>

                <tr>
                    <td>NUPTK / PEG-ID</td>
                    <td>: 0956742643300052</td>
                </tr>
                <tr>
                    <td>NRG</td>
                    <td>: 110271631074</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>: Kampar</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: 24 Juni 1964</td>
                </tr>
                <tr>
                    <td>Sekolah Induk</td>
                    <td>: SD NEGERI 004 PULAU TERAP</td>
                </tr>
                <tr>
                    <td>TMT Di Sekolah Ini</td>
                    <td>: 31 Desember 1999</td>
                </tr>
                <tr>
                    <td>Jenis PTK</td>
                    <td>: Guru Kelas</td>
                </tr>
                <tr>
                    <td>Tugas Tambahan</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Jumlah Jam Mengajar</td>
                    <td>: 24</td>
                </tr>
                <tr>
                    <td>JJM Di Sekolah Lain</td>
                    <td>: ()</td>
                </tr>
                <tr>
                    <td>Total JJM</td>
                    <td>: 24</td>
                </tr>

            </table>
            <br>
            <font color="#000000"><U>lAPORAN ABSENSI</U></font>
            <br>
            <table width="40%">
                <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Sakit</th>
                    <th>Izin</th>
                    <th>Alfa</th>
                    <th>Cuti</th>
                    <th>D.L</th>
                <tr>
                    <td width='5%' align='center'>1</td>
                    <td width='10%'>Januari</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>2</td>
                    <td width='10%'>Februari</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>3</td>
                    <td width='10%'>Maret</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>4</td>
                    <td width='10%'>April</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>5</td>
                    <td width='10%'>Mei</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>6</td>
                    <td width='10%'>Juni</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>7</td>
                    <td width='10%'>Juli</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>8</td>
                    <td width='10%'>Agustus</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>9</td>
                    <td width='10%'>September</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>10</td>
                    <td width='10%'>Oktober</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>11</td>
                    <td width='10%'>Nopember</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
                <tr>
                    <td width='5%' align='center'>12</td>
                    <td width='10%'>Desember</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                    <td width='5%' align='center'>-</td>
                </tr>
            </table>
            <table width="100%" border="0">
                <tr>


                    <!--<tr><td width="50%" align="center">Ka. UPTD Kecamatan Kuok</td><td align="center"> </td></tr>-->
                    <p>
                <tr>
                    <td width="50%" align="center">Mengetahui</td>
                    <td align="center"></td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td>
                        <center>Kepala Sekolah</center>
                    </td>
                    <td>
                        <center>PTK Yang Bersangkutan</center>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td width="50%" align="center">RENI HERLINA, S.Pd</td>
                    <td align="center"><U>SRI ELVI GUSTI,S.Pd</U></td>
                </tr>
                <tr>
                    <td width="50%" align="center">NIP. 197611081998082001</td>
                    <td align="center">NIP. 196406241985042001</td>
                </tr>
            </table>

            <h5><I>Info PTK Ini dicetak pada : Jumat, 3 Desember 2021, 03:13 WIB </I></h5>

    </div>
    <a href="javascript:window.print()"><img src="../image/print.png"></a>
    <a href="laporanguru.php"><img src="../image/exit.png"></a>
    <!--------------- #footer --------------->
    <div id="footer">
        Copyright &copy; 2014 - 2021 by <a href="../index.php">www.silbdisdikkabkampar.com</a></div>
</div>
</div>
</body>
</html>


</html>