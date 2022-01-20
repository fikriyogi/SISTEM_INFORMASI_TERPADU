<?php

namespace src\Database;

use Db;
use src\Database\Email;

class User extends Db
{
    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function lasdID()
    {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }
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

    public function get_initial($character) {
        $name_slice = explode(' ',$character);
        $name_slice = array_filter($name_slice);
        $initials = '';
        $initials .= (isset($name_slice[0][0]))?strtoupper($name_slice[0][0]):'';
        $initials .= (isset($name_slice[count($name_slice)-1][0]))?strtoupper($name_slice[count($name_slice)-1][0]):'';
        // return '<div class="profile-pic">'.$initials.'</div>';
        return $initials;
    }
    public function show_age($tanggal_lahir){
        // tanggal lahir
        $tanggal = new DateTime($tanggal_lahir);
        // tanggal hari ini
        $today = new DateTime('today');
        // tahun
        $y = $today->diff($tanggal)->y;
        // bulan
        $m = $today->diff($tanggal)->m;
        // hari
        $d = $today->diff($tanggal)->d;
        return $y . " tahun " . $m . " bulan " . $d . " hari";
    }
    public function birthday($tanggal_lahir) {
        $today = date("m-d");
        $lahir = date("m-d", strtotime($tanggal_lahir));
        if ($today==$lahir) {
            $message = '<blink>Selamat Ulang Tahun</blink>';
        } else {
            $message = '';
        }

        return $message;
    }
    public function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
    public function update_log() {
        $created = date("Y-m-d");
        $statement = $this->conn->prepare('INSERT INTO history (user_id, action, create_at) VALUES (?,?,?)')  ;
        $statement->execute([$_SESSION['userSession'], 'Update Profil', $created]);
    }
    public function update_profile($id,$username,$email) {
        $stmt = $this->conn->prepare('SELECT * FROM tbl_users WHERE userID = ?');
        $stmt->execute([$id]);
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);

        // Update the record
        $stmt = $this->conn->prepare('UPDATE tbl_users SET userName = ?, userEmail = ? WHERE userID = ?');
        $stmt->execute([$id,$username, $email ]);

        $result = $stmt->fetchAll();

        if(isset($result))
        {
            $this->update_log();
            $mail_body = "
                    <p>Hi ".$user_name.",</p>
                    <p>We are detect someone to change profil your account, please check it ".SITE_URL."history.php?uid=".$_SESSION['userSession']."
                    <p>Best Regards,<br />Webslesson</p>
                    ";
            require 'app/class/phpmailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'fikriyogi@gmail.com';
            $mail->Password = '@fy085264972892';
            $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
            $mail->From = 'info@webslesson.info';           //Sets the From email address for the message
            $mail->FromName = 'Webslesson';                 //Sets the From name of the message
            $mail->AddAddress($_POST['user_email'], $_POST['user_name']);       //Adds a "To" address
            $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
            $mail->IsHTML(true);                            //Sets message type to HTML
            $mail->Subject = 'Profil Update';           //Sets the Subject of the message
            $mail->Body = $mail_body;                           //An HTML or plain text message body
            if($mail->Send())                               //Send an Email. Return true on success or false on error
            {
                $message = '<label class="text-success">Register Done, Please check your mail.</label>';
            }
        }
        $msg = 'Updated Successfully!';
        header("location:settings.php");

    }
}
