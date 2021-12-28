<?php

namespace src\Database;
namespace src\Crud;
use Db;
use src\Crud;
use src\Database\Config;



class Menu extends Config
{

    public function main_menu($email, $level, $divisi) {
        $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=? AND level=? AND divisi=?");
        $stmt->execute([$email, $level, $divisi]);
        $userRow = $stmt->fetch();
        $this->tes();
    }
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


}
