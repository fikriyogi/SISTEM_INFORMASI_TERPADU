<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require '../si-config.php';


$database = new Database();
$db = $database->getConnection();

$items = new Employee($db);

$stmt = $items->getEmployees();
$itemCount = $stmt->rowCount();


echo json_encode($itemCount);

if($itemCount > 0){

	$employeeArr = array();
	$employeeArr["body"] = array();
	$employeeArr["itemCount"] = $itemCount;

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

		array_push($employeeArr["body"], $e);
	}
	$data =  json_encode($employeeArr);


		// Cycle through the array
		foreach ($data->stand as $idx => $stand) {

			// Output a row
			echo "<tr>";
			echo "<td>$stand->nama</td>";
			echo "<td>$stand->alias</td>";
			echo "</tr>";
		}


}

else{
	http_response_code(404);
	echo json_encode(
		array("messkk" => "No record found.")
	);
}
?>