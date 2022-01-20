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




if(isset($_GET['appKey'])){
    $id = $_GET['appKey'];
    $data = $user_home->runQuery("SELECT * FROM siswa WHERE kd_sekolah=?");
    $data->execute([$id]);
    $a = $data->fetchAll();
}
else
{
    header('Location: schools.php');
}

include "header.php";
?>

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
                        echo "<td>".$row['id_pd']."</td>";
                        echo "<td><a class='' href='profil-penduduk.php?token=".$row['uid']."'>".$row['nama_siswa']."</a></td>";
                        echo "<td>".$row['kd_sekolah']."</td>";
                        echo "<td>".$row['nisn']."</td>";
                        echo "<td><a class='btn btn-info' href='student_details.php?token=".$row['uid']."'>Profil</a> | <a class='btn btn-info' href='update-tps.php?id=".$row['id_pd']."'>TPS</a> |
                        <a class='btn btn-danger' href='penduduk.php?hapus_siswa=".$row['id_pd']."' onclick='return confirm(".'Are you sure'.")'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>


<?php include 'footer.php'; ?>