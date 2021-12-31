<?php

require_once 'dbconfig.php';

class USER
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

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

    public function count($table, $condition, $value, $group){
        if (!$condition=='' && !$value=='') {
            // code...
            $sql = "SELECT count(*) FROM $table WHERE $condition = ?"; 
            $result = $this->conn->prepare($sql); 
            $result->execute([$value]); 
            $number_of_rows = $result->fetchColumn(); 
        } else {
            $sql = "SELECT count(*) FROM $table"; 
            $result = $this->conn->prepare($sql); 
            $result->execute(); 
            $number_of_rows = $result->fetchColumn(); 
        }
        
        return $number_of_rows;
    }
    public function hitung($table, $group){
            $sql = "SELECT count(*) FROM $table GROUP BY $group = ?";
            $result = $this->conn->prepare($sql);
            $result->execute([$group]);
            $number_of_rows = $result->fetchColumn();

        return $number_of_rows;
    }
    public function sql_count($sql) {
        $result = $this->conn->prepare($sql); 
        $result->execute(); 
        $number_of_rows = $result->fetchColumn(); 
        return $number_of_rows;
    }
    public function autocomplete_form($id) {
        $nik = $id;

        //mengambil data
        $query = $this->conn->prepare("SELECT * FROM warga WHERE nik=?");
        $query->execute([$nik]);
        $warga = $query->fetch();
        $data = array(
                    'nama'      =>  @$warga['nama'],
                    'jk'      =>  @$warga['jk'],
                    'kk'   =>  @$warga['kk'],
                    'hp'      =>  @$warga['hp'],
                    'jenis_pekerjaan'      =>  @$warga['jenis_pekerjaan'],
                    'tgl_lahir'    =>  @$warga['tgl_lahir'],);

        //tampil data
        echo json_encode($data);
    }

    


    public function send_mail($email, $message, $subject)
    {
        require 'app/class/phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->AddAddress($email);
        $mail->Username = EMAIL_ADDRESS;
        $mail->Password = EMAIL_PASS;
        $mail->SetFrom('fikriyogi@gmail.com', APP_NAME);
        $mail->AddReplyTo("fikriyogi@gmail.com", APP_NAME);
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();
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


    public function send_message($title, $description, $userID, $divisi,  $uid)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO tb_message(title,uid,description,desa_id,user_id) 
                                                VALUES(?,?,?,?,?)");
            $stmt->execute([$title, $uid, $description, $divisi, $userID]);
            return $stmt;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function create_log($userID, $action)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO tb_log(user_id,description) 
                                                VALUES(?,?)");
            $stmt->execute([$userID, $action]);
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
    public function main_menu($email, $level, $divisi) {
        $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=? AND level=? AND divisi=?");
        $stmt->execute([$email, $level, $divisi]);
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
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
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
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
                $message = "Your OTP Code is" . $otp;
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
                        $_SESSION['nik'] = $userRow['nik_id'];
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

    // public function count($table, $condition, $val) {
    //     $stmt = $this->conn->prepare("SELECT count(*) FROM $table WHERE $condition = ?");
    //     $stmt->execute([$val]);
    //     $count = $stmt->rowCount();
    //     return true;
    // }

    public function get_link($link="setting") {
        if(isset($link)){
            $setting = $link;

            switch ($setting) {
                case 'home':
                    include "page/home.php";
                    break;
                case 'identitas_sekolah':
                    include "page/identitas_sekolah.php";
                    break;
                case 'tutorial':
                    include "page/tutorial.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        }else{
            include "beranda.php";
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

    public function update_profile($id,$username,$email) {
        // $pdo = pdo_connect_mysql();
        $msg = '';
        // $id = $_SESSION['userSession'];
        // Get the contact from the register_user table
        $stmt = $this->conn->prepare('SELECT * FROM tbl_users WHERE userID = ?');
        $stmt->execute([$id]);
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
        
                
                // Update the record
                $stmt = $this->conn->prepare('UPDATE tbl_users SET userName = ?, userEmail = ? WHERE userID = ?');
                $stmt->execute([$id,$username, $email ]);

                // $statement = $this->conn->prepare('INSERT INTO history (user_id, action, create_at) VALUES (?,?,?)')  ;
                // $statement->execute([$_SESSION['userSession'], 'Update Profil', $created]);

                $result = $stmt->fetchAll();

                if(isset($result))
                {
                    $base_url = "http://localhost/d/";  //change this baseurl value as per your file path
                    $mail_body = "
                    <p>Hi ".$user_name.",</p>
                    <p>We are detect someone to change profil your account, please check it ".$base_url."history.php?uid=".$_SESSION['userSession']."
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

    public function logout()
    {
        session_destroy();
        $_SESSION['userSession'] = false;
        $_SESSION['token'] = false;
        $_SESSION['level'] = false;
        $_SESSION['divisi'] = false;
    }

}
