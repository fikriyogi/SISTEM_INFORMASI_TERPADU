<?php

namespace src\Database;

use Db;
use Db\Email;

class Login extends Db
{
    public function lasdID()
    {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }
    public function set_level($level) {
        $set = $_SESSION['level']==$level;
        return $set;
    }
    public function set_divisi($divisi) {
        $set = $_SESSION['divisi']==$divisi;
        return $set;
    }
    public function get_initial($character) {
        $name_slice = explode(' ',$character);
        $name_slice = array_filter($name_slice);
        $initials = '';
        $initials .= (isset($name_slice[0][0]))?strtoupper($name_slice[0][0]):'';
        $initials .= (isset($name_slice[count($name_slice)-1][0]))?strtoupper($name_slice[count($name_slice)-1][0]):'';
        // return '<div class="profile-pic">'.$initials.'</div>';
        return $initials;
    }
    public function login($email, $upass, $level, $divisi)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=?");
            $stmt->execute([$email]);
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($userRow['level']==$level && $userRow['divisi']==$divisi) {
                $this->login_proses($email, $upass, $level, $divisi, $userRow['app_id']);
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function login_proses($email, $upass, $level, $divisi, $app_id) {

        $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=? AND level=? AND divisi=?");
        $stmt->execute([$email, $level, $divisi]);
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 1) {
            if ($userRow['is_otp']==1) { // If OTP Login is Active
                $otp = rand(111111,999999);
                $state = $this->conn->prepare("UPDATE tbl_users SET otp=:otp WHERE userEmail=:email");
                $state->execute([":otp" => $otp, ":email" => $email]);
                $subject = "OTP Code";
                $message = "Your OTP Code is " . $otp;
                $send = $this->send_mail($email, $message, $subject);
                session_start();
                $_SESSION['email'] = $email;
                header('location:otp.php');
            } else {
                if ($userRow['userStatus'] == "Y") {
                    if (password_verify($upass, $userRow["userPass"])) {
                        $_SESSION['userSession'] = $userRow['userID'];
                        $_SESSION['app_id'] = $app_id;
                        $_SESSION['level'] = $level;
                        $_SESSION['divisi'] = $divisi;
                        if ($this->set_divisi('admin')) {
                            if ($this->set_level('Super Admin')) {
                                header('location:'.SITE_URL.'admin');
                            }
                        }
                        elseif ($this->set_divisi('desa')) {
                            if ($this->set_level('Admin')) {
                                header('location:'.SITE_URL.'desa');
                            }
                        }
                        elseif ($this->set_divisi('sekolah')) {
                            if ($this->set_level('Admin')) {
                                header('location:'.SITE_URL.'sekolah');
                            }
                        }
                        elseif ($this->set_divisi('rumah sakit')) {
                            if ($this->set_level('Admin')) {
                                header('location:'.SITE_URL.'rumah-sakit');
                            }
                        }

                        // header('location:home.php');
                        return true;
                    } else {
                        header("Location: index.php?error");
                        exit();
                    }
                } else {
                    header("Location: index.php?inactive");
                    exit();
                }
            }
        } else {
            header("Location: index.php?error");
            exit();
        }
    }

    /*
     * Jika pengguna sudah meminta kode OTP, akan tetapi belum masuk, maka laksanakan perintah dibawah ini
    */
    public function resend_otp($email)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=? ");
            $stmt->execute([$email]);
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() == 1) {

                if ($userRow['userStatus'] == "Y") {
                    $subject = "OTP Code";
                    $message = "Your OTP Code is " . $userRow['otp'];
                    $send = $this->send_mail($email, $message, $subject);
                } else {
                    // header("Location: otp.php?inactive");
                    exit();
                }
            } else {
                // header("Location: otp.php?error");
                exit();
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    /*
     * Jika pengguna sudah memasukkan kode OTP dan proses Masuk, maka laksanakan perintah dibawah ini
    */
    public function sub_otp($email, $otp)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=? AND otp=?");
            $stmt->execute([$email, $otp]);
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() == 1) {

                if ($userRow['userStatus'] == "Y") {
                    $_SESSION['userSession'] = $userRow['userID'];
                    return true;
                } else {
                    header("Location: otp.php?inactive");
                    exit();
                }
            } else {
                header("Location: otp.php?error");
                exit();
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function  is_logged_in()
    {
        if (isset($_SESSION['userSession'])) {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }


    public function logout()
    {
        session_destroy();
        $_SESSION['userSession'] = false;
        $_SESSION['token'] = false;
        $_SESSION['level'] = false;
        $_SESSION['divisi'] = false;
    }

}
