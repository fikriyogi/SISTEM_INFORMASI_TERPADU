<?php
session_start();
require_once __DIR__ . '/class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) {
    $user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=?");
$stmt->execute([$_SESSION['userSession']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$data = $user_home->runQuery("SELECT * FROM sc_sekolah");
$data->execute();
$a = $data->fetchAll();

//
//@$nama = $_GET['nama'];
//if ($nama == '') {
//    $data_siswa = $user_home->runQuery('SELECT * FROM sekolah');
//} else {
//    $data_siswa = $user_home->runQuery("SELECT * FROM sekolah WHERE npsn=? ");
//    $stmt->execute([$nama]);
//}

?>

<!DOCTYPE html>
<html class="no-js">

<head>
    <title><?php echo $row['userEmail']; ?></title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo $row['userEmail']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<main class="container">
    <div class="bg-light p-5 rounded">
        <div class="row>">
            <div class="col-md-12">
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
                        echo "<td>".$row['id_sekolah']."</td>";
                        echo "<td><a class='btn btn-info' href='profil-penduduk.php?id=".$row['id_sekolah']."'>".$row['nama_sekolah']."</a></td>";
                        echo "<td>".$row['npsn']."</td>";
                        echo "<td>".$row['status']."</td>";
                        echo "<td><a class='btn btn-info' href='students.php?appKey=".$row['npsn']."'>Siswa</a> | <a class='btn btn-info' href='update-tps.php?id=".$row['id_sekolah']."'>TPS</a> |
                        <a class='btn btn-danger' href='penduduk.php?hapus_siswa=".$row['id_sekolah']."' onclick='return confirm(".'Are you sure'.")'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>


<!--/.fluid-container-->
<?php include __DIR__ . '/footer.php'; ?>