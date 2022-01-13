<?php
// Membuat variabel, ubah sesuai dengan nama host dan database pada hosting 
$host = "localhost";
$user = "root";
$pass = "";
$db       = "test";
 
//Menggunakan objek mysqli untuk membuat koneksi dan menyimpan nya dalam variabel $mysqli 
$mysqli = new mysqli($host, $user, $pass, $db);
 

 
if($_GET['action'] == "table_data"){
 
 
      $columns = array( 
                               0 =>'id', 
                               1 =>'nama',
                               2=> 'nik',
                               3=> 'id',
                           );
 
      $querycount = $mysqli->query("SELECT count(id) as jumlah FROM warga");
      $datacount = $querycount->fetch_array();
    
   
        $totalData = $datacount['jumlah'];
             
        $totalFiltered = $totalData; 
 
        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order = $columns[$_POST['order']['0']['column']];
        $dir = $_POST['order']['0']['dir'];
             
        if(empty($_POST['search']['value']))
        {            
         $query = $mysqli->query("SELECT id,nama,nik FROM warga order by $order $dir
                                                      LIMIT $limit
                                                      OFFSET $start");
        }
        else {
            $search = $_POST['search']['value']; 
            $query = $mysqli->query("SELECT id,nama,nik FROM warga WHERE nama LIKE '%$search%'
                                                         or nik LIKE '%$search%'
                                                         order by $order $dir
                                                         LIMIT $limit
                                                         OFFSET $start");
 
 
           $querycount = $mysqli->query("SELECT count(id) as jumlah FROM warga WHERE nama LIKE '%$search%'
                                                                        or nik LIKE '%$search%'");
         $datacount = $querycount->fetch_array();
           $totalFiltered = $datacount['jumlah'];
        }
 
        $data = array();
        if(!empty($query))
        {
            $no = $start + 1;
            while ($r = $query->fetch_array())
            {
                $nestedData['no'] = $no;
                $nestedData['nama'] = $r['nama'];
                $nestedData['nik'] = $r['nik'];
                $nestedData['aksi'] = "<a href='update.php?appKey=".$r['nik']."' class='btn-warning btn-sm'>Ubah</a>&nbsp; <a href='#' class='btn-danger btn-sm'>Hapus</a>";
                $data[] = $nestedData;
                $no++;
            }
        }
           
        $json_data = array(
                    "draw"            => intval($_POST['draw']),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data  
                    );
             
        echo json_encode($json_data); 
 
}
?>