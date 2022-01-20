<?php


//use Db;
//use src\Database\Email;



class Config extends Db
{
    public $dateFormat = 'Y-m-d H:i:s';

    public function tes()
    {
        echo "khjkhjh";
    }

    public function get_initial($character)
    {
        $name_slice = explode(' ', $character);
        $name_slice = array_filter($name_slice);
        $initials = '';
        $initials .= (isset($name_slice[0][0])) ? strtoupper($name_slice[0][0]) : '';
        $initials .= (isset($name_slice[count($name_slice) - 1][0])) ? strtoupper($name_slice[count($name_slice) - 1][0]) : '';
        // return '<div class="profile-pic">'.$initials.'</div>';
        return $initials;
    }

    public function show_age($tanggal_lahir)
    {
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

    public function birthday($tanggal_lahir, $message)
    {
        $today = date("m-d");
        $lahir = date("m-d", strtotime($tanggal_lahir));
        if ($today == $lahir) {
            $message = $message;
        } else {
            $message = '';
        }
        return $message;
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

    public function tgl_indo($tanggal)
    {
        $bulan = array(
            1 => 'Januari',
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
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }

    public function autocomplete_form($id)
    {
        $nik = $id;

        //mengambil data
        $query = $this->conn->prepare("SELECT * FROM warga WHERE nik=?");
        $query->execute([$nik]);
        $warga = $query->fetch();
        $data = array(
            'nama' => @$warga['nama'],
            'jk' => @$warga['jk'],
            'kk' => @$warga['kk'],
            'hp' => @$warga['hp'],
            'jenis_pekerjaan' => @$warga['jenis_pekerjaan'],
            'tgl_lahir' => @$warga['tgl_lahir'],);

        //tampil data
        echo json_encode($data);
    }


    public function getAvatar($character)
    {
        $name_slice = explode(' ', $character);
        $name_slice = array_filter($name_slice);
        $initials = '';
        $initials .= (isset($name_slice[0][0])) ? strtoupper($name_slice[0][0]) : '';
        $initials .= (isset($name_slice[count($name_slice) - 1][0])) ? strtoupper($name_slice[count($name_slice) - 1][0]) : '';
        // return '<div class="profile-pic">'.$initials.'</div>';
        return $initials;
    }

    public function tampil_umur($tanggal_lahir)
    {
        $tanggal = new DateTime($tanggal_lahir);
        $today = new DateTime('today');
        $y = $today->diff($tanggal)->y;
        $m = $today->diff($tanggal)->m;
        $d = $today->diff($tanggal)->d;
        return $y . " tahun " . $m . " bulan " . $d . " hari";
    }


    /**
     * Short circuit type function to stop the process flow on validation failure.
     */
    public function validateAjaxRequest()
    {
        // to check if its an ajax request, exit if not
        $http_request = $_SERVER['HTTP_X_REQUESTED_WITH'];
        if (!isset($http_request) && strtolower($http_request) != 'xmlhttprequest') {
            $output = $this->createJsonInstance('Not a valid AJAX request!');
            $this->endAction($output);
        }
    }

    /**
     * Last point in the AJAX work flow.
     * Clearing tokens, handles and resource cleanup can be done here.
     *
     * @param string $output
     * @param boolean $clearToken
     */
    public function endAction($output)
    {
        die($output);
    }

    public function setDebug($mode)
    {
        if ($mode == true) {
            ini_set('display_errors', 1);
            set_error_handler(function ($severity, $message, $file, $line) {
                if (error_reporting() & $severity) {
                    throw new \ErrorException($message, 0, $severity, $file, $line);
                }
            });
        }
    }

    /**
     * encodes a message string into a json object
     *
     * @param string $message
     * @param string $type
     * @return \JsonSerializable encoded json object
     */
    public function createJsonInstance($message, $type = 'error')
    {
        $messageArray = array(
            'type' => $type,
            'text' => $message
        );
        $jsonObj = json_encode($messageArray);
        return $jsonObj;
    }

    public function getJsonValue($json, $key)
    {
        $jsonArray = json_decode($json, true);
        return $jsonArray[$key];
    }

    /**
     * If you are using PHP, this is the best possible secure hash
     * do not try to implement somthing on your own
     *
     * @param string $text
     * @return string
     */
    public function getSecureHash($text)
    {
        $hashedText = password_hash($text, PASSWORD_DEFAULT);
        return $hashedText;
    }

    /**
     * generates a random token of the length passed
     *
     * @param int $length
     * @return string
     */
    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet) - 1;
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->cryptoRandSecure(0, $max)];
        }
        return $token;
    }

    public function cryptoRandSecure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) {
            return $min; // not so random...
        }
        $log = ceil(log($range, 2));
        $bytes = (int)($log / 8) + 1; // length in bytes
        $bits = (int)$log + 1; // length in bits
        $filter = (int)(1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
    }

    /**
     * makes the passed string url safe and return encoded url
     *
     * @param string $str
     * @return string
     */
    public function cleanUrl($str, $isEncode = 'true')
    {
        $delimiter = "-";
        $str = str_replace(' ', $delimiter, $str); // Replaces all spaces with hyphens.
        $str = preg_replace('/[^A-Za-z0-9\-]/', '', $str); // allows only alphanumeric and -
        $str = trim($str, $delimiter); // remove delimiter from both ends
        $regexConseqChars = '/' . $delimiter . $delimiter . '+/';
        $str = preg_replace($regexConseqChars, $delimiter, $str); // remove consequtive delimiter
        $str = mb_strtolower($str, 'UTF-8'); // convert to all lower
        if ($isEncode) {
            $str = urldecode($str); // encode to url
        }
        return $str;
    }

    /**
     * to mitigate XSS attack
     */
    public function xssafe($data, $encoding = 'UTF-8')
    {
        return htmlspecialchars($data, ENT_QUOTES | ENT_HTML401, $encoding);
    }

    /**
     * convenient method to print XSS mitigated text
     *
     * @param string $data
     */
    public function xecho($data)
    {
        echo $this->xssafe($data);
    }

    function getRandomString(int $length = 64, string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string
    {
        if ($length < 1) {
            throw new \RangeException("Length must be a positive integer");
        }
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces[] = $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }

    /**
     * this generates predictable random strings.
     * So the best
     * option is to use the above function getRandomString
     * and to use that, you need PHP 7 or above
     *
     * @param number $length
     * @return string
     */
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getMemberForgotByResetToken($recoveryToken)
    {
        $query = 'SELECT * FROM tbl_password_reset where password_recovery_token = ? AND is_valid = 1 AND expire_at >= now()';
        $paramType = 's';
        $paramValue = array(
            $recoveryToken
        );
        $memberRecord = $this->conn->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    public function expireToken($recoveryToken)
    {
        $query = 'UPDATE tbl_password_reset SET is_valid = 0, expired_at = now() WHERE password_recovery_token = ?';
        $paramType = 's';
        $paramValue = array(
            $recoveryToken
        );
        $this->conn->execute($query, $paramType, $paramValue);
    }

//     SHA1 ENCODE DECODE
    function encode($string, $key)
    {
        $key = sha1($key);
        $strLen = strlen($string);
        $keyLen = strlen($key);
        for ($i = 0; $i < $strLen; $i++) {
            $ordStr = ord(substr($string, $i, 1));
            if ($j == $keyLen) {
                $j = 0;
            }
            $ordKey = ord(substr($key, $j, 1));
            $j++;
            $hash .= strrev(base_convert(dechex($ordStr + $ordKey), 16, 36));
        }
        return $hash;
    }

    function decode($string, $key)
    {
        $key = sha1($key);
        $strLen = strlen($string);
        $keyLen = strlen($key);
        for ($i = 0; $i < $strLen; $i += 2) {
            $ordStr = hexdec(base_convert(strrev(substr($string, $i, 2)), 36, 16));
            if ($j == $keyLen) {
                $j = 0;
            }
            $ordKey = ord(substr($key, $j, 1));
            $j++;
            $hash .= chr($ordStr - $ordKey);
        }
        return $hash;
    }

//     OPEN SSL ENCRYPE DECRYPT
    function encrypt_decrypt($string, $action = 'encrypt')
    {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'AA74CDCC2BBRT935136HH7B63C27'; // user define private key
        $secret_iv = '5fgf5HJ5g27'; // user define secret key
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16); // sha256 is hash_hmac_algo
        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
    }

    // echo "Your Encrypted password is = ". $pwd = encrypt_decrypt('spaceo', 'encrypt');
    // echo "Your Decrypted password is = ". encrypt_decrypt($pwd, 'decrypt');

    ###############################
    // GENERATE PASSWORD
    /**
     * A PHP function that will generate a secure random password.
     *
     * @param int $length The length that you want your random password to be.
     * @return string The random password.
     */
    function random_password($length)
    {
        //A list of characters that can be used in our
        //random password.
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!-.[]?*()';
        //Create a blank string.
        $password = '';
        //Get the index of the last character in our $characters string.
        $characterListLength = mb_strlen($characters, '8bit') - 1;
        //Loop from 1 to the $length that was specified.
        foreach (range(1, $length) as $i) {
            $password .= $characters[random_int(0, $characterListLength)];
        }
        return $password;

    }


    /* return Operating System */
    function operating_system_detection()
    {
        if (isset($_SERVER)) {
            $agent = $_SERVER['HTTP_USER_AGENT'];
        } else {
            global $HTTP_SERVER_VARS;
            if (isset($HTTP_SERVER_VARS)) {
                $agent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
            } else {
                global $HTTP_USER_AGENT;
                $agent = $HTTP_USER_AGENT;
            }
        }
        $ros[] = array('Windows XP', 'Windows XP');
        $ros[] = array('Windows NT 5.1|Windows NT5.1)', 'Windows XP');
        $ros[] = array('Windows 2000', 'Windows 2000');
        $ros[] = array('Windows NT 5.0', 'Windows 2000');
        $ros[] = array('Windows NT 4.0|WinNT4.0', 'Windows NT');
        $ros[] = array('Windows NT 5.2', 'Windows Server 2003');
        $ros[] = array('Windows NT 6.0', 'Windows Vista');
        $ros[] = array('Windows NT 7.0', 'Windows 7');
        $ros[] = array('Windows CE', 'Windows CE');
        $ros[] = array('(media center pc).([0-9]{1,2}\.[0-9]{1,2})', 'Windows Media Center');
        $ros[] = array('(win)([0-9]{1,2}\.[0-9x]{1,2})', 'Windows');
        $ros[] = array('(win)([0-9]{2})', 'Windows');
        $ros[] = array('(windows)([0-9x]{2})', 'Windows');
        // Doesn't seem like these are necessary...not totally sure though..
        //$ros[] = array('(winnt)([0-9]{1,2}\.[0-9]{1,2}){0,1}', 'Windows NT');
        //$ros[] = array('(windows nt)(([0-9]{1,2}\.[0-9]{1,2}){0,1})', 'Windows NT'); // fix by bg
        $ros[] = array('Windows ME', 'Windows ME');
        $ros[] = array('Win 9x 4.90', 'Windows ME');
        $ros[] = array('Windows 98|Win98', 'Windows 98');
        $ros[] = array('Windows 95', 'Windows 95');
        $ros[] = array('(windows)([0-9]{1,2}\.[0-9]{1,2})', 'Windows');
        $ros[] = array('win32', 'Windows');
        $ros[] = array('(java)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2})', 'Java');
        $ros[] = array('(Solaris)([0-9]{1,2}\.[0-9x]{1,2}){0,1}', 'Solaris');
        $ros[] = array('dos x86', 'DOS');
        $ros[] = array('unix', 'Unix');
        $ros[] = array('Mac OS X', 'Mac OS X');
        $ros[] = array('Mac_PowerPC', 'Macintosh PowerPC');
        $ros[] = array('(mac|Macintosh)', 'Mac OS');
        $ros[] = array('(sunos)([0-9]{1,2}\.[0-9]{1,2}){0,1}', 'SunOS');
        $ros[] = array('(beos)([0-9]{1,2}\.[0-9]{1,2}){0,1}', 'BeOS');
        $ros[] = array('(risc os)([0-9]{1,2}\.[0-9]{1,2})', 'RISC OS');
        $ros[] = array('os/2', 'OS/2');
        $ros[] = array('freebsd', 'FreeBSD');
        $ros[] = array('openbsd', 'OpenBSD');
        $ros[] = array('netbsd', 'NetBSD');
        $ros[] = array('irix', 'IRIX');
        $ros[] = array('plan9', 'Plan9');
        $ros[] = array('osf', 'OSF');
        $ros[] = array('aix', 'AIX');
        $ros[] = array('GNU Hurd', 'GNU Hurd');
        $ros[] = array('(fedora)', 'Linux - Fedora');
        $ros[] = array('(kubuntu)', 'Linux - Kubuntu');
        $ros[] = array('(ubuntu)', 'Linux - Ubuntu');
        $ros[] = array('(debian)', 'Linux - Debian');
        $ros[] = array('(CentOS)', 'Linux - CentOS');
        $ros[] = array('(Mandriva).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)', 'Linux - Mandriva');
        $ros[] = array('(SUSE).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)', 'Linux - SUSE');
        $ros[] = array('(Dropline)', 'Linux - Slackware (Dropline GNOME)');
        $ros[] = array('(ASPLinux)', 'Linux - ASPLinux');
        $ros[] = array('(Red Hat)', 'Linux - Red Hat');
        // Loads of Linux machines will be detected as unix.
        // Actually, all of the linux machines I've checked have the 'X11' in the User Agent.
        //$ros[] = array('X11', 'Unix');
        $ros[] = array('(linux)', 'Linux');
        $ros[] = array('(amigaos)([0-9]{1,2}\.[0-9]{1,2})', 'AmigaOS');
        $ros[] = array('amiga-aweb', 'AmigaOS');
        $ros[] = array('amiga', 'Amiga');
        $ros[] = array('AvantGo', 'PalmOS');
        //$ros[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1}-([0-9]{1,2}) i([0-9]{1})86){1}', 'Linux');
        //$ros[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1} i([0-9]{1}86)){1}', 'Linux');
        //$ros[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1})', 'Linux');
        $ros[] = array('[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}', 'Linux');
        $ros[] = array('(webtv)/([0-9]{1,2}\.[0-9]{1,2})', 'WebTV');
        $ros[] = array('Dreamcast', 'Dreamcast OS');
        $ros[] = array('GetRight', 'Windows');
        $ros[] = array('go!zilla', 'Windows');
        $ros[] = array('gozilla', 'Windows');
        $ros[] = array('gulliver', 'Windows');
        $ros[] = array('ia archiver', 'Windows');
        $ros[] = array('NetPositive', 'Windows');
        $ros[] = array('mass downloader', 'Windows');
        $ros[] = array('microsoft', 'Windows');
        $ros[] = array('offline explorer', 'Windows');
        $ros[] = array('teleport', 'Windows');
        $ros[] = array('web downloader', 'Windows');
        $ros[] = array('webcapture', 'Windows');
        $ros[] = array('webcollage', 'Windows');
        $ros[] = array('webcopier', 'Windows');
        $ros[] = array('webstripper', 'Windows');
        $ros[] = array('webzip', 'Windows');
        $ros[] = array('wget', 'Windows');
        $ros[] = array('Java', 'Unknown');
        $ros[] = array('flashget', 'Windows');
        // delete next line if the script show not the right OS
        //$ros[] = array('(PHP)/([0-9]{1,2}.[0-9]{1,2})', 'PHP');
        $ros[] = array('MS FrontPage', 'Windows');
        $ros[] = array('(msproxy)/([0-9]{1,2}.[0-9]{1,2})', 'Windows');
        $ros[] = array('(msie)([0-9]{1,2}.[0-9]{1,2})', 'Windows');
        $ros[] = array('libwww-perl', 'Unix');
        $ros[] = array('UP.Browser', 'Windows CE');
        $ros[] = array('NetAnts', 'Windows');
        $file = count($ros);
        $os = '';
        for ($n = 0; $n < $file; $n++) {
            if (preg_match('/' . $ros[$n][0] . '/i', $agent, $name)) {
                $os = @$ros[$n][1] . ' ' . @$name[2];
                break;
            }
        }
        return trim($os);
    }

    function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }


    // Mendapatkan IP pengunjung menggunakan $_SERVER
    function get_client_ip_2()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }


    // Mendapatkan jenis web browser pengunjung
    function get_client_browser()
    {
        $browser = '';
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
            $browser = 'Netscape';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
            $browser = 'Firefox';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
            $browser = 'Chrome';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
            $browser = 'Opera';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
            $browser = 'Internet Explorer';
        else
            $browser = 'Other';
        return $browser;
    }

    function Sensor($nik)
    {
        //ambil 4 angka di tengah yan akan disensor
        $censored = mb_substr($nik, 8, 4);

        //pecah kelompok angka pertama dan terakhir
        $phone2 = explode($censored, $nik);

        //gabung angka perama dan terakhir dengan angka tengah yang telah di sensor
        $nik_sensor = $phone2[0] . "****" . $phone2[1];
        return $nik_sensor;
    }

    function Sensor_Tgl_Lahir($tgl)
    {
        //ambil 4 angka di tengah yan akan disensor
        $censored = mb_substr($tgl, 5, 2);

        //pecah kelompok angka pertama dan terakhir
        $phone2 = explode($censored, $tgl);

        //gabung angka perama dan terakhir dengan angka tengah yang telah di sensor
        $tgl_sensor = $phone2[0] . "**" . $phone2[1];
        return $tgl_sensor;
    }

    function Alert_Modal_Template($message_type, $message)
    {
        $variables['message_type'] = $message_type;
        $variables['message'] = $message;

        $template = file_get_contents("template/modal/modal_alert.php");

        foreach ($variables as $key => $value) {
            $template = str_replace('{{ ' . $key . ' }}', $value, $template);
        }

        return $template;
    }

    # Mengubah Bulan Ke Romawi
    function getRomawi($bln)
    {
        switch ($bln) {
            case 1:
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }

    # Penomoran Surat
    function nomor_surat($kat_surat)
    {
        $bulan = date('n');
        $romawi = getRomawi($bulan);
        $tahun = date('Y');
        $nomor = "/" . $kat_surat . "/" . $romawi . "/" . $tahun;
        // membaca kode  terbesar dari penomoran yang ada didatabase berdasarkan tanggal
        $query = "SELECT max(kd_surat) as maxKode FROM transaksi WHERE month(tanggal)='$bulan'";
        $hasil = mysql_query($query);
        $data = mysql_fetch_array($hasil);
        $no = $data['maxKode'];
        $noUrut = $no + 1;
        //Membuat Nomor dengan awalan depan 0 misalnya , 01,02
        //Jika ingin 003 ,tinggal ganti %03
        $kode = sprintf("%02s", $noUrut);
        $nomorbaru = $kode . $nomor;
        return $nomorbaru;
    }

    #Url Slug A
    function slugify($urlString)
    {
        $search = array('Ș', 'Ț', 'ş', 'ţ', 'Ş', 'Ţ', 'ș', 'ț', 'î', 'â', 'ă', 'Î', ' ', 'Ă', 'ë', 'Ë');
        $replace = array('s', 't', 's', 't', 's', 't', 's', 't', 'i', 'a', 'a', 'i', 'a', 'a', 'e', 'E');
        $str = str_ireplace($search, $replace, strtolower(trim($urlString)));
        $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
        $str = str_replace(' ', '-', $str);
        return preg_replace('/\-{2,}/', '-', $str);
    }

    #Url Slug B
    function createUrlSlug($urlString)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
        return $slug;
    }

    #Url Slug C (Text to Slug)
    function textToSlug($text = '')
    {
        $text = trim($text);
        if (empty($text)) return '';
        $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
        $text = strtolower(trim($text));
        $text = str_replace(' ', '-', $text);
        $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
        return $text;
    }

    #Url Slug to Text
    function slugToText($slug = '')
    {
        $slug = trim($slug);
        if (empty($slug)) return '';
        $slug = str_replace('-', ' ', $slug);
        $slug = ucwords($slug);
        return $slug;
    }

    #Find Specific Word
    function findWord($word)
    {
        // $word = "fox";
        $mystring = "The quick brown fox jumps over the lazy dog";
        // Test whether the string contains the word
        if (strpos($mystring, $word) !== false) {
            echo "Word Found!";
        } else {
            echo "Word Not Found!";
        }
    }

    #Timestamp A
    function timeAgo($time_ago)
    {
        $time_ago = strtotime($time_ago);
        $cur_time = time();
        $time_elapsed = $cur_time - $time_ago;
        $seconds = $time_elapsed;
        $minutes = round($time_elapsed / 60);
        $hours = round($time_elapsed / 3600);
        $days = round($time_elapsed / 86400);
        $weeks = round($time_elapsed / 604800);
        $months = round($time_elapsed / 2600640);
        $years = round($time_elapsed / 31207680);
        // Seconds
        if ($seconds <= 60) {
            return "just now";
        } //Minutes
        else if ($minutes <= 60) {
            if ($minutes == 1) {
                return "one minute ago";
            } else {
                return "$minutes minutes ago";
            }
        } //Hours
        else if ($hours <= 24) {
            if ($hours == 1) {
                return "an hour ago";
            } else {
                return "$hours hrs ago";
            }
        } //Days
        else if ($days <= 7) {
            if ($days == 1) {
                return "yesterday";
            } else {
                return "$days days ago";
            }
        } //Weeks
        else if ($weeks <= 4.3) {
            if ($weeks == 1) {
                return "a week ago";
            } else {
                return "$weeks weeks ago";
            }
        } //Months
        else if ($months <= 12) {
            if ($months == 1) {
                return "a month ago";
            } else {
                return "$months months ago";
            }
        } //Years
        else {
            if ($years == 1) {
                return "one year ago";
            } else {
                return "$years years ago";
            }
        }
    }

    #Detect Browser
    function getBrowser()
    {

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $browser = "N/A";

        $browsers = array(
            '/msie/i' => 'Internet explorer',
            '/firefox/i' => 'Firefox',
            '/safari/i' => 'Safari',
            '/chrome/i' => 'Chrome',
            '/edge/i' => 'Edge',
            '/opera/i' => 'Opera',
            '/mobile/i' => 'Mobile browser'
        );

        foreach ($browsers as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $browser = $value;
            }
        }

        return $browser;
    }

    #Check Validate Url
    function checkUrl($url)
    {
        // $website = test_input($_POST["website"]);
        if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
            echo "Valid URL";
        } else {
            echo "Invalid URL";
        }
    }

    #Encrypt and Decrypt SSL String PHP
    function ssl_encrypt_string($simple_string)
    {
        // Storingthe cipher method
        $ciphering = "AES-128-CTR";
        // Using OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';
        // Storing the encryption key
        $encryption_key = "W3docs";
        // Using openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);

        // Displaying the encrypted string
        return $encryption;


    }

    function ssl_decrypt_string($simple_string)
    {

        // Storingthe cipher method
        $ciphering = "AES-128-CTR";
        // Using OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';
        // Storing the encryption key
        $encryption_key = "W3docs";
        // Using openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);
        // Non-NULL Initialization Vector for decryption
        $decryption_iv = '1234567891011121';
        // Storing the decryption key
        $decryption_key = "W3docs";
        // Using openssl_decrypt() function to decrypt the data
        $decryption = openssl_decrypt($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
        return $decryption;

    }

    #Make ID User
    function create_id_user($length)
    {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    #Make OTP Number
    function create_otp($length)
    {
        $generator = "1357902468";
        $result = "";
        for ($i = 1; $i <= $length; $i++) {
            $result .= substr($generator, (rand() % (strlen($generator))), 1);
        }
        return $result;
    }

    # Get IP Address
    function get_ip_address()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    #Get Last Twitter Status
    function get_current_url()
    {
        $url = @($_SERVER["HTTPS"] != 'on') ? 'http://' . $_SERVER["SERVER_NAME"] : 'https://' . $_SERVER["SERVER_NAME"];
        $url .= ($_SERVER["SERVER_PORT"] !== 80) ? ":" . $_SERVER["SERVER_PORT"] : "";
        $url .= $_SERVER["REQUEST_URI"];
        return $url;
    }


    // $chip = array(
    //  [0] => aes-128-cbc
    //      [1] => aes-128-cbc-hmac-sha1
    //      [2] => aes-128-cbc-hmac-sha256
    //      [3] => aes-128-ccm
    //      [4] => aes-128-cfb
    //      [5] => aes-128-cfb1
    //      [6] => aes-128-cfb8
    //      [7] => aes-128-ctr
    //      [9] => aes-128-gcm
    //      [10] => aes-128-ocb
    //      [11] => aes-128-ofb
    //      [12] => aes-128-xts
    //      [13] => aes-192-cbc
    //      [14] => aes-192-ccm
    //      [15] => aes-192-cfb
    //      [16] => aes-192-cfb1
    //      [17] => aes-192-cfb8
    //      [18] => aes-192-ctr
    //      [20] => aes-192-gcm
    //      [21] => aes-192-ocb
    //      [22] => aes-192-ofb
    //      [23] => aes-256-cbc
    //      [24] => aes-256-cbc-hmac-sha1
    //      [25] => aes-256-cbc-hmac-sha256
    //      [26] => aes-256-ccm
    //      [27] => aes-256-cfb
    //      [28] => aes-256-cfb1
    //      [29] => aes-256-cfb8
    //      [30] => aes-256-ctr
    //      [32] => aes-256-gcm
    //      [33] => aes-256-ocb
    //      [34] => aes-256-ofb
    //      [35] => aes-256-xts
    //      [36] => aria-128-cbc
    //      [37] => aria-128-ccm
    //      [38] => aria-128-cfb
    //      [39] => aria-128-cfb1
    //      [40] => aria-128-cfb8
    //      [41] => aria-128-ctr
    //      [43] => aria-128-gcm
    //      [44] => aria-128-ofb
    //      [45] => aria-192-cbc
    //      [46] => aria-192-ccm
    //      [47] => aria-192-cfb
    //      [48] => aria-192-cfb1
    //      [49] => aria-192-cfb8
    //      [50] => aria-192-ctr
    //      [52] => aria-192-gcm
    //      [53] => aria-192-ofb
    //      [54] => aria-256-cbc
    //      [55] => aria-256-ccm
    //      [56] => aria-256-cfb
    //      [57] => aria-256-cfb1
    //      [58] => aria-256-cfb8
    //      [59] => aria-256-ctr
    //      [61] => aria-256-gcm
    //      [62] => aria-256-ofb
    //      [63] => bf-cbc
    //      [64] => bf-cfb
    //      [66] => bf-ofb
    //      [67] => camellia-128-cbc
    //      [68] => camellia-128-cfb
    //      [69] => camellia-128-cfb1
    //      [70] => camellia-128-cfb8
    //      [71] => camellia-128-ctr
    //      [73] => camellia-128-ofb
    //      [74] => camellia-192-cbc
    //      [75] => camellia-192-cfb
    //      [76] => camellia-192-cfb1
    //      [77] => camellia-192-cfb8
    //      [78] => camellia-192-ctr
    //      [80] => camellia-192-ofb
    //      [81] => camellia-256-cbc
    //      [82] => camellia-256-cfb
    //      [83] => camellia-256-cfb1
    //      [84] => camellia-256-cfb8
    //      [85] => camellia-256-ctr
    //      [87] => camellia-256-ofb
    //      [88] => cast5-cbc
    //      [89] => cast5-cfb
    //      [91] => cast5-ofb
    //      [92] => chacha20
    //      [93] => chacha20-poly1305
    //      [111] => id-aes128-CCM
    //      [112] => id-aes128-GCM
    //      [113] => id-aes128-wrap
    //      [114] => id-aes128-wrap-pad
    //      [115] => id-aes192-CCM
    //      [116] => id-aes192-GCM
    //      [117] => id-aes192-wrap
    //      [118] => id-aes192-wrap-pad
    //      [119] => id-aes256-CCM
    //      [120] => id-aes256-GCM
    //      [121] => id-aes256-wrap
    //      [122] => id-aes256-wrap-pad
    //      [124] => idea-cbc
    //      [125] => idea-cfb
    //      [127] => idea-ofb
    //      [137] => seed-cbc
    //      [138] => seed-cfb
    //      [140] => seed-ofb
    //      [141] => sm4-cbc
    //      [142] => sm4-cfb
    //      [143] => sm4-ctr
    //      [145] => sm4-ofb
    // )
    // Save The Keys In Your Configuration File

    // Store a string into the variable which
    // need to be Encrypted
    // $string = "Apa boleh buat macam\n";

    // Display the original string
    // echo "Original String: " . $string;

    // Store the cipher method
    // $ciphering = "AES-128-CTR";

    ##############################################################
    function ssl_encrypt($string)
    {
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length(CHIPER);
        $options = 0;

        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($string, CHIPER,
            SECONDKEY, $options, FIRSTKEY);
        return $encryption;
    }

    ##############################################################
    function ssl_decrypt($string)
    {
        $options = 0;

        $encryption = openssl_encrypt($string, CHIPER,
            SECONDKEY, $options, FIRSTKEY);

        // Use openssl_decrypt() function to decrypt the data
        $decryption = openssl_decrypt($encryption, CHIPER,
            SECONDKEY, $options, FIRSTKEY);
        return $decryption;
    }

    # Email template
    function Email_Verification_Code($email, $code)
    {
        $variables['name'] = $email;
        $variables['age'] = $code;

        $template = file_get_contents("template/email/email-code-or-passord.html");

        foreach ($variables as $key => $value) {
            $template = str_replace('{{ ' . $key . ' }}', $value, $template);
        }

        return $template;
    }
}


// $chip = array(
//  [0] => aes-128-cbc
//      [1] => aes-128-cbc-hmac-sha1
//      [2] => aes-128-cbc-hmac-sha256
//      [3] => aes-128-ccm
//      [4] => aes-128-cfb
//      [5] => aes-128-cfb1
//      [6] => aes-128-cfb8
//      [7] => aes-128-ctr
//      [9] => aes-128-gcm
//      [10] => aes-128-ocb
//      [11] => aes-128-ofb
//      [12] => aes-128-xts
//      [13] => aes-192-cbc
//      [14] => aes-192-ccm
//      [15] => aes-192-cfb
//      [16] => aes-192-cfb1
//      [17] => aes-192-cfb8
//      [18] => aes-192-ctr
//      [20] => aes-192-gcm
//      [21] => aes-192-ocb
//      [22] => aes-192-ofb
//      [23] => aes-256-cbc
//      [24] => aes-256-cbc-hmac-sha1
//      [25] => aes-256-cbc-hmac-sha256
//      [26] => aes-256-ccm
//      [27] => aes-256-cfb
//      [28] => aes-256-cfb1
//      [29] => aes-256-cfb8
//      [30] => aes-256-ctr
//      [32] => aes-256-gcm
//      [33] => aes-256-ocb
//      [34] => aes-256-ofb
//      [35] => aes-256-xts
//      [36] => aria-128-cbc
//      [37] => aria-128-ccm
//      [38] => aria-128-cfb
//      [39] => aria-128-cfb1
//      [40] => aria-128-cfb8
//      [41] => aria-128-ctr
//      [43] => aria-128-gcm
//      [44] => aria-128-ofb
//      [45] => aria-192-cbc
//      [46] => aria-192-ccm
//      [47] => aria-192-cfb
//      [48] => aria-192-cfb1
//      [49] => aria-192-cfb8
//      [50] => aria-192-ctr
//      [52] => aria-192-gcm
//      [53] => aria-192-ofb
//      [54] => aria-256-cbc
//      [55] => aria-256-ccm
//      [56] => aria-256-cfb
//      [57] => aria-256-cfb1
//      [58] => aria-256-cfb8
//      [59] => aria-256-ctr
//      [61] => aria-256-gcm
//      [62] => aria-256-ofb
//      [63] => bf-cbc
//      [64] => bf-cfb
//      [66] => bf-ofb
//      [67] => camellia-128-cbc
//      [68] => camellia-128-cfb
//      [69] => camellia-128-cfb1
//      [70] => camellia-128-cfb8
//      [71] => camellia-128-ctr
//      [73] => camellia-128-ofb
//      [74] => camellia-192-cbc
//      [75] => camellia-192-cfb
//      [76] => camellia-192-cfb1
//      [77] => camellia-192-cfb8
//      [78] => camellia-192-ctr
//      [80] => camellia-192-ofb
//      [81] => camellia-256-cbc
//      [82] => camellia-256-cfb
//      [83] => camellia-256-cfb1
//      [84] => camellia-256-cfb8
//      [85] => camellia-256-ctr
//      [87] => camellia-256-ofb
//      [88] => cast5-cbc
//      [89] => cast5-cfb
//      [91] => cast5-ofb
//      [92] => chacha20
//      [93] => chacha20-poly1305
//      [111] => id-aes128-CCM
//      [112] => id-aes128-GCM
//      [113] => id-aes128-wrap
//      [114] => id-aes128-wrap-pad
//      [115] => id-aes192-CCM
//      [116] => id-aes192-GCM
//      [117] => id-aes192-wrap
//      [118] => id-aes192-wrap-pad
//      [119] => id-aes256-CCM
//      [120] => id-aes256-GCM
//      [121] => id-aes256-wrap
//      [122] => id-aes256-wrap-pad
//      [124] => idea-cbc
//      [125] => idea-cfb
//      [127] => idea-ofb
//      [137] => seed-cbc
//      [138] => seed-cfb
//      [140] => seed-ofb
//      [141] => sm4-cbc
//      [142] => sm4-cfb
//      [143] => sm4-ctr
//      [145] => sm4-ofb
// )
// Save The Keys In Your Configuration File


    // $string = "Alhamdulillah";
    // echo $string. '<br>';
    // echo ssl_encrypt($string). '<br>';
    // echo ssl_decrypt($string);

    // USAGE

    // echo '<a href="'.get_current_url().'">Current Url</a>';
    // $phone = '';
    // echo empty($phone) ? "Array is empty.": "Array is not empty.";


