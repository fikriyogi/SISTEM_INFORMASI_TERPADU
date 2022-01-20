<?php

function test() {
    echo "afa" . masuk();
}

//class Register extends Data {
//
//	public function register($uname, $email, $upass, $code)
//	{
//		try {
//			$password = password_hash($upass, PASSWORD_DEFAULT);
//			$stmt = $this->conn->prepare("INSERT INTO tbl_users(userName,userEmail,userPass,tokenCode)
//                                                VALUES(?,?,?,?)");
//			$stmt->execute([$uname, $email, $password, $code]);
//			return $stmt;
//		} catch (PDOException $ex) {
//			echo $ex->getMessage();
//		}
//	}
//}