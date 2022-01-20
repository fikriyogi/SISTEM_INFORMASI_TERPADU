<?php
require 'si-config.php';
$user_home = new Warga();
// $pesan = "";
// $kon=new PDO("mysql:host=localhost;dbname=test","root","");
// if(isset($_POST['vaksinasi'])){
//   $pencarian="%".$_POST['vaksinasi']."%";
//   try{
//    $cari=$kon->prepare("select * from warga where nik like :nik");
//    $cari->BindParam(":nik",$pencarian);
//    $cari->execute();
//    if($cari->rowCount()<1){
//     $pesan = "<i> Tidak ada hasil untuk pencarian kata <b>\"".$_POST['vaksinasi']."\"</i></b>";
//    }else{
//     while($t=$cari->fetch()){

//     $pesan = "<i> Hasil pencarian dengan kata <b>\"".$_POST['vaksinasi']."\"</b></i><br>";

//     $hasil = '<tr>
//                         <td>Nama</td>
//                         <td>'.$t["nama"].'</td>
//                     </tr>
//                     <tr >
//                         <td colspan="2">Status Vaksinasi</td>
//                     </tr>
//                     <tr>
//                         <td>Vaksinasi 1</td>
//                         <td>Sudah</td>
//                     </tr>
//                     <tr>
//                         <td>Vaksinasi 2</td>
//                         <td>Belum</td>
//                     </tr>
//                     <tr>
//                         <td>Vaksinasi 3</td>
//                         <td>Belum</td>
//                     </tr>';
    
//     }
//    } 
//   }catch(PDOException $e){
//    echo $e->getMessage();
//   }
// }


if(isset($_POST['vaksinasi'])){
    $pencarian = $_POST['vaksinasi'];
    $cari = $user_home->SI_Search($pencarian, "warga");
    // if ($cari) {
        
    // }
}



// if(isset($_POST['vaksinasi'])){
// 	// $id = $_GET['vaksinasi'];
// 	// $data = $user_home->runQuery("SELECT * FROM warga WHERE nik=?");
// 	// $data->execute([$id]);
// 	// $a = $data->fetchAll();

// 	$q = $_POST['vaksinasi'];
// 	$search = $db->prepare("SELECT * FROM `warga` WHERE `nik` LIKE ?");
// 	$search->execute(array("%$q%"));
// 	foreach($search as $s) {
// 	  echo $s['nama'];
// 	}

// } else {
// 	$a = "Masukkan NIK Terlebih Dahulu";
// }
require_once SI_THEME . 'default/header.php';

?>



<div class="container search-table mt-5">
            <div class="search-box">
            	<form method="post" action="">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Masukkan NIK</h5>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="myInput" name="vaksinasi" class="form-control" placeholder="NIK">
                    </div> 
                </div>
                </form>
            </div>
            <div class="search-list mt-3">
                <p><?= $pesan; ?></p>
                <table class="table table-bordered" id="myTable">
                    
                    <?= $hasil; ?>
                </table>

            </div>
        </div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?= SI_JS; ?>bootstrap.bundle.min.js" ></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
