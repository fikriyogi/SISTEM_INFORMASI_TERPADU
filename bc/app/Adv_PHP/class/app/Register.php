<?php

namespace src\Database;

use Db;
use src\Database\Email;

class Register extends Db
{
    /*
     * Fungsi create_id adalah untuk membuat Nomor Unik atau ID berdasarkan kriteria yang ada
     * */
    public function create_id($id, $table, $table_id)
    {
        $stmt = $this->conn->prepare("SELECT max($id) as Number FROM $table");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $kd = $row['Number'];
        $urutan = (int) substr($kd, 0, 3);
        $urutan++;
        $huruf = $table_id.'-';
        $tanggal = date('Y-m-d');
        $tanggal_baru = preg_replace("/[^a-zA-Z0-9]/", "", $tanggal);
        $kd = $huruf . $tanggal_baru . sprintf("%03s", $urutan);
        return $kd;

    }

    public function register($uname, $email, $upass, $code)
    {
        try {
            $password = password_hash($upass, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO tbl_users(userName,userEmail,userPass,tokenCode) 
                                                VALUES(?,?,?,?)");
            $stmt->execute([$uname, $email, $password, $code]);
            return $stmt;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    /**
     * @return PDO|null
     */
    public function check_pass($upass)
    {
        $number = preg_match('@[0-9]@', $upass);
        $uppercase = preg_match('@[A-Z]@', $upass);
        $lowercase = preg_match('@[a-z]@', $upass);
        $specialChars = preg_match('@[^\w]@', $upass);

        if(strlen($upass) < 8) {
            $msg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        } elseif (!$number) {
            $msg = "must contain at least one number";
        } elseif (!$uppercase) {
            $msg = "one upper case letter, one lower case letter and one special character.";
        } elseif (!$lowercase) {
            $msg = "one lower case letter and one special character.";
        } elseif (!$specialChars) {
            $msg = "one special character.";
        } else {
            $msg = "Password is strength";
        }

        return $msg;

    }

}
