<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require '../si-config.php';


$database = new Database();
$db = $database->getConnection();

$items = new Employee($db);

$stmt = $items->getEmployees();
$itemCount = $stmt->rowCount();


// echo json_encode($itemCount);

if($itemCount > 0){

	$employeeArr = array();
	// $employeeArr["body"] = array();
	// $employeeArr["itemCount"] = $itemCount;

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		$e = array(
			"id" => $id,
			"nama" => $nama,
			"alias" => $alias,
			"kk" => $kk,
			"nik" => $nik,
			"tgl_lahir" => $tgl_lahir
		);

		// array_push($employeeArr["body"], $e);
	}
	echo  json_encode($employeeArr);

// 	foreach($data as $key => $e) {
//     $name = $data[$key]["nama"];
//     $age = $data[$key]["alias"];
    
//     echo $name.' is '.$age.' years old.';
// }



}

else{
	http_response_code(404);
	echo json_encode(
		array("messkk" => "No record found.")
	);
}
?>