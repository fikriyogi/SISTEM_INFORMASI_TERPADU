<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-kk: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require '../si-config.php';


$database = new Database();
$db = $database->getConnection();

$item = new Employee($db);

$data = json_decode(file_get_contents("php://input"));

$item->nama = $data->nama;
$item->alias = $data->alias;
$item->kk = $data->kk;
$item->nik = $data->nik;
$item->tgl_lahir = date('Y-m-d H:i:s');

if($item->createEmployee()){
	echo 'Employee create successfully.';
} else{
	echo 'Employee could not be tgl_lahir.';
}
?>