<?php 
session_start();
require_once '../class.user.php';
$user_home = new USER();

if(isset($_GET['uid'])){
    $id = $_GET['uid'];
    $data = $user_home->runQuery("SELECT * FROM warga WHERE nik=:id");
    $data->execute([":id" => $id]);
    $row = $data->fetch(PDO::FETCH_ASSOC);
    
}
                                                        $kk = $row['kk'];
                                                        $m = $user_home->runQuery("SELECT * FROM warga WHERE kk=:kk");
                                                        $m->execute([":kk" => $kk]);
                                                        $a = $m->fetchAll();
                                                        foreach ($a as $r) {
                                                            echo '
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"><span>CT Scan</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span>10 Feb 2020</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>'.$r["nama"].'</span></div>
                                                            <div class="nk-tb-col"><span class="tb-status text-success">Done</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Download">
                                                                            <em class="icon ni ni-download"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>';
                                                    }
                                                        ?>