<?php
class Employee{

	// Connection
	private $conn;

	// Table
	private $db_table = "warga";

	// Columns
	public $id;
	public $nama;
	public $alias;
	public $kk;
	public $nik;
	public $tgl_lahir;

	// Db connection
	public function __construct($db){
		$this->conn = $db;
	}

	// GET ALL
	public function getEmployees(){
		$sqlQuery = "SELECT id, nama, alias, kk, nik, tgl_lahir FROM " . $this->db_table . "";
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		return $stmt;
	}

	// CREATE
	public function createEmployee(){
		$sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        nama = :nama, 
                        alias = :alias, 
                        kk = :kk, 
                        nik = :nik, 
                        tgl_lahir = :tgl_lahir";

		$stmt = $this->conn->prepare($sqlQuery);

		// sanitize
		$this->nama=htmlspecialchars(strip_tags($this->nama));
		$this->alias=htmlspecialchars(strip_tags($this->alias));
		$this->kk=htmlspecialchars(strip_tags($this->kk));
		$this->nik=htmlspecialchars(strip_tags($this->nik));
		$this->tgl_lahir=htmlspecialchars(strip_tags($this->tgl_lahir));

		// bind data
		$stmt->bindParam(":nama", $this->nama);
		$stmt->bindParam(":alias", $this->alias);
		$stmt->bindParam(":kk", $this->kk);
		$stmt->bindParam(":nik", $this->nik);
		$stmt->bindParam(":tgl_lahir", $this->tgl_lahir);

		if($stmt->execute()){
			return true;
		}
		return false;
	}

	// READ single
	public function getSingleEmployee(){
		$sqlQuery = "SELECT
                        id, 
                        nama, 
                        alias, 
                        kk, 
                        nik, 
                        tgl_lahir
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";

		$stmt = $this->conn->prepare($sqlQuery);

		$stmt->bindParam(1, $this->id);

		$stmt->execute();

		$dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nama = $dataRow['nama'];
		$this->alias = $dataRow['alias'];
		$this->kk = $dataRow['kk'];
		$this->nik = $dataRow['nik'];
		$this->tgl_lahir = $dataRow['tgl_lahir'];
	}

	// UPDATE
	public function updateEmployee(){
		$sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        nama = :nama, 
                        alias = :alias, 
                        kk = :kk, 
                        nik = :nik, 
                        tgl_lahir = :tgl_lahir
                    WHERE 
                        id = :id";

		$stmt = $this->conn->prepare($sqlQuery);

		$this->nama=htmlspecialchars(strip_tags($this->nama));
		$this->alias=htmlspecialchars(strip_tags($this->alias));
		$this->kk=htmlspecialchars(strip_tags($this->kk));
		$this->nik=htmlspecialchars(strip_tags($this->nik));
		$this->tgl_lahir=htmlspecialchars(strip_tags($this->tgl_lahir));
		$this->id=htmlspecialchars(strip_tags($this->id));

		// bind data
		$stmt->bindParam(":nama", $this->nama);
		$stmt->bindParam(":alias", $this->alias);
		$stmt->bindParam(":kk", $this->kk);
		$stmt->bindParam(":nik", $this->nik);
		$stmt->bindParam(":tgl_lahir", $this->tgl_lahir);
		$stmt->bindParam(":id", $this->id);

		if($stmt->execute()){
			return true;
		}
		return false;
	}

	// DELETE
	function deleteEmployee(){
		$sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
		$stmt = $this->conn->prepare($sqlQuery);

		$this->id=htmlspecialchars(strip_tags($this->id));

		$stmt->bindParam(1, $this->id);

		if($stmt->execute()){
			return true;
		}
		return false;
	}

}