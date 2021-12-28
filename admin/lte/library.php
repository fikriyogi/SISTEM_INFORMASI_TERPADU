<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "test";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function nik_log($nik,$ip,$browser,$agent)
    {
        $data = $this->db->prepare('INSERT INTO log_dpt (nik_key,ip,browser,agent) VALUES (?,?,?,?)');
        
        $data->bindParam(1, $nik);
        $data->bindParam(2, $ip);
        $data->bindParam(3, $browser);
        $data->bindParam(4, $agent);
        // $data->bindParam(5, $os);

        $data->execute();
        return $data->rowCount();
    }
    public function add_data($nama, $nik, $kk)
    {
        $data = $this->db->prepare('INSERT INTO warga (nama,nik,kk) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama);
        $data->bindParam(2, $nik);
        $data->bindParam(3, $kk);

        $data->execute();
        return $data->rowCount();
    }
    public function show($sql)
    {
        $query = $this->db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function getProv($id) {
        $data = $this->db->prepare("SELECT * FROM prov WHERE id='$id'");
        $row_count =$data->fetchColumn();
        if($row_count > 0){
            echo"
             <option selected>- Pilih Kota -</option>";
             foreach($data as $row) {
                echo "<option value=$row[kota_id]>$row[kota_nama]</option>";
             }
        }else{
            echo "<option selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option>";
        }
    }
    public function duplicate()
    {

        // $query = $this->db->prepare("SELECT nik, COUNT(*) duplikat FROM dpt GROUP BY nik HAVING COUNT(duplikat)  > 1");
        $query = $this->db->prepare("SELECT *  FROM dpt  WHERE nik IN  (SELECT nik FROM dpt GROUP BY nik HAVING COUNT(*)  > 1)");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function duplicate_total()
    {

        // $query = $this->db->prepare("SELECT nik, COUNT(*) duplikat FROM dpt GROUP BY nik HAVING COUNT(duplikat)  > 1");
        $query = $this->db->prepare("SELECT *, COUNT( * ) AS total FROM dpt GROUP BY nik");
        $query->execute();
        $data = $query->fetch();
        // return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM warga where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$nama,$nik,$kk){
        $query = $this->db->prepare('UPDATE warga set nama=?,nik=?,kk=? where id=?');
        
        $query->bindParam(1, $nama);
        $query->bindParam(2, $nik);
        $query->bindParam(3, $kk);
        $query->bindParam(4, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM warga where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

}
?>