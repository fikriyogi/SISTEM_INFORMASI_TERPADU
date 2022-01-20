<?php
// Include config.php file
include_once 'config.php';

// Create a class warga
class Database extends Pengaturan {
	// Fetch all or a single user from database
	public function fetch($id = 0) {
		$sql = 'SELECT * FROM warga';
		if ($id != 0) {
			$sql .= ' WHERE id = :id';
		}
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id' => $id]);
		$rows = $stmt->fetchAll();
		return $rows;
	}

	// Insert an user in the database
	public function insert($nama, $nik, $hp) {
		$sql = 'INSERT INTO warga (nama, nik, hp) VALUES (:nama, :nik, :hp)';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['nama' => $nama, 'nik' => $nik, 'hp' => $hp]);
		return true;
	}

	// Update an user in the database
	public function update($nama, $nik, $hp, $id) {
		$sql = 'UPDATE warga SET nama = :nama, nik = :nik, hp = :hp WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['nama' => $nama, 'nik' => $nik, 'hp' => $hp, 'id' => $id]);
		return true;
	}

	// Delete an user from database
	public function delete($id) {
		$sql = 'DELETE FROM warga WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id' => $id]);
		return true;
	}
}

?>
