<?php 

	 
include __DIR__ . '/header.php';


$user_home->get_link(@$_GET['setting']);
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <title><?php echo $row['userEmail']; ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo $paths->styleDirectory; ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $paths->styleDirectory; ?>css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $paths->styleDirectory; ?>styles.css" rel="stylesheet" media="screen">
    <link href="navbar-top-fixed.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo $paths->styleDirectory; ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>




<body>
	
	<div class="navbar navbar-fixed-top">
	    <div class="navbar-inner">
	        <div class="container-fluid">
	            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </a>
	            <a class="brand" href="#">Member Home</a>
	            <div class="nav-collapse collapse">
	                <ul class="nav pull-right">
	                    <li class="dropdown">
	                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i
	                                    class="icon-user"></i>
	                            <?php echo $row['userEmail']; ?> <i class="caret"></i>
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li>
	                                <a tabindex="-1" href="home.php?setting=identitas_sekolah">Identitas Sekolah</a>
	                            </li>
	                            <li>
	                                <a tabindex="-1" href="logout.php">Logout</a>
	                            </li>
	                        </ul>
	                    </li>
	                </ul>
	                <ul class="nav">
	                    <li class="active">
	                        <a href="http://www.codingcage.com/">Coding Cage</a>
	                    </li>
	                    <li class="dropdown">
	                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tutorials <b class="caret"></b>

	                        </a>
	                        <ul class="dropdown-menu" id="menu1">
	                            <li><a href="profile.php">Profile</a></li>
	                            <li><a href="schools.php">Schools</a></li>
	                            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
	                            <li><a href="http://www.codingcage.com/search/label/Bootstrap">Bootstrap</a></li>
	                            <li><a href="http://www.codingcage.com/search/label/CRUD">CRUD</a></li>
	                        </ul>
	                    </li>


	                </ul>
	            </div>
	            <!--/.nav-collapse -->
	        </div>
	    </div>
	</div>
	<div class="container">
			<h1 align="center">PHP Register Login Script with Email Verification</h1>
			<h4 align="center"><a href="settings.php">Update Profil</a></h4>

		
			<h3><?php echo $row['userEmail']; ?></h3>
			<h3>SURAT DESA</h3>
			<hr>
			<ul>
				<li><a href="">SURAT KETERANGAN MISKIN</a></li>
				<li><a href="">SURAT KETERANGAN PINDAH DOMISILI</a></li>
				<li><a href="">SURAT KEHILANGAN</a></li>
				<li><a href="">SURAT KETERANGAN BEDA NAMA</a></li>
				<li><a href="">SURAT KETERANGAN CATATAN KEPOLISIAN</a></li>
				<li><a href="">SURAT EDARAN</a></li>
				<li><a href="">SURAT KETERANGAN CERAI</a></li>
				<li><a href="">SURAT KETERANGAN HILANG</a></li>
				<li><a href="">SURAT KETERANGAN NIKAH</a></li>
				<li><a href="">SURAT KETERANGAN HEWAN</a></li>
				<li><a href="">SURAT KETERANGAN E-KTP</a></li>
				<li><a href="">SURAT KETERANGAN USAHA</a></li>
				<li><a href="">SURAT KETERANGAN WARIS DAN KUASA WARIS</a></li>
				<li><a href="">SURAT PERNYATAAN BELUM PERNAHM MENIKAH</a></li>
				<li><a href="">SURAT PERNYATAAN HIBAH</a></li>
				<li><a href="">SURAT PERNYATAAN JUAL BELI</a></li>
				<li><a href="">SURAT PERNYATAAN KUASA</a></li>
				<li><a href="">SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK</a></li>
				<li><a href="">SURAT KETERANGAN PERJALANAN DINAS</a></li>
			</ul>
			<h3>SURAT SEKOLAH</h3>
			<hr>
			<ul>
				<li><a href="">SURAT PERJALANAN DINAS</a></li>
				<li><a href="">SURAT KETERANGAN AKTIF MENGAJAR</a></li>
				<li><a href="">SURAT AGENDA KEPALA SEKOLAH</a></li>
				<li><a href="">BUKU AGENDA SURAT MASUK-KELUAR</a></li>
				<li><a href="">BUKU KUNJUNGAN KOMITE SEKOLAH</a></li>
				<li><a href="">BUKU KUNJUNGAN ORANG TUA WALI MURID</a></li>
				<li><a href="">BUKU PIKET </a></li>
				<li><a href="">BUKU TAMU KHUSUS </a></li>
				<li><a href="">BUKU TAMU UMUM4 </a></li>
				<li><a href="">INVENTARIS UNDANGAN SOSIAL </a></li>
				<li><a href="">PROGRAM KERJA TU </a></li>
				<li><a href="">SPESIMEN TANDA TANGAN KEPALA SEKOLAH </a></li>
				<li><a href="">INSTRUKSI KEPALA SEKOLAH </a></li>
				<li><a href="">KEPUTUSAN KEPALA SEKOLAH </a></li>
				<li><a href="">PERATURAN KEPALA SEKOLAH </a></li>
				<li><a href="">SURAT DINAS BIASA</a></li>
				<li><a href="">SURAT EDARAN KEPALA SEKOLAH</a></li>
				<li><a href="">SURAT IZIN KEPALA SEKOLAH</a></li>
				<li><a href="">SURAT PERINTAH</a></li>
				<li><a href="">SURAT PERJANJIAN</a></li>
				<li><a href="">UNDANGAN GURU</a></li>
				<li><a href="">SURAT KETERANGAN</a></li>
				<li><a href="">DAFTAR HADIR PERTEMUAN RAPAT</a></li>
				<li><a href="">SURAT KUASA</a></li>
				<li><a href="">SURAT UNDANGAN</a></li>
				<li><a href="">SISTEMATIKA LAPORAN WORKSHOP </a></li>
				<li><a href="">SURAT PANGGILAN</a></li>
				<li><a href="">NOTA DINAS </a></li>
				<li><a href="">SURAT PERINTAH PERJALANAN DINAS</a></li>
				<li><a href="">PENGUMUMAN</a></li>
				<li><a href="">REKOMENDASI</a></li>
				<li><a href="">LAPORAN KEGIATAN </a></li>
				<li><a href="">SURAT PENGANTAR</a></li>
				<li><a href="">BERITA ACARA </a></li>
				<li><a href="">NOTULEN KEGIATAN </a></li>
				<li><a href="">SURAT KETERANGAN BENDAHARA</a></li>
				<li><a href="">SURAT KETERANGAN OPERATOR SEKOLAH</a></li>
				<li><a href="">SURAT KETERANGAN GURU HONOR KOMITE</a></li>
				<li><a href="">SURAT KETERANGAN TENAGA PERPUSTAKAAN</a></li>
				<li><a href="">SURAT KETERANGAN JAGA SEKOLAH</a></li>
				<li><a href="">SURAT AKTIF MENGAJAR GURU</a></li>
			</ul>
			<h3>LEMBARAN SUPERVISI</h3>
			<hr>
			<ul>
				<li><a href="">SUPERVISI KEPALA SEKOLAH</a></li>
				<li><a href="">SUPERVISI GURU</a></li>
				<li><a href="">SUPERVISI TENAGA ADMINISTRASI</a></li>
				<li><a href="">SUPERVISI TENAGA PERPUSTAKAAN</a></li>
				<li><a href="">SUPERVISI JAGA SEKOLAH</a></li>
			</ul>
			
		</div>
	
<?php 
include __DIR__ . '/footer.php';

?>