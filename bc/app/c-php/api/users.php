<?php
// Include CORS headers
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Content-Type: application/json');

// Include action.php file
include_once 'db.php';
// Create object of Users class
$user = new Database();

// create a api variable to get HTTP method dynamically
$api = $_SERVER['REQUEST_METHOD'];

// get id from url
$id = intval($_GET['id'] ?? '');

// Get all or a single user from database
if ($api == 'GET') {
	if ($id != 0) {
		$data = $user->fetch($id);
	} else {
		$data = $user->fetch();
	}
	echo json_encode($data);
}

// Add a new user into database
if ($api == 'POST') {
	$nama = $user->test_input($_POST['nama']);
	$nik = $user->test_input($_POST['nik']);
	$hp = $user->test_input($_POST['hp'])   ;

	if ($user->insert($nama, $nik, $hp)) {
		echo $user->message('User added successfully!',false);
	} else {
		echo $user->message('Failed to add an user!',true);
	}
}

// Update an user in database
if ($api == 'PUT') {
	parse_str(file_get_contents('php://input'), $post_input);

	$nama = $user->test_input($post_input['nama']);
	$nik = $user->test_input($post_input['nik']);
	$hp = $user->test_input($post_input['hp']);

	if ($id != null) {
		if ($user->update($nama, $nik, $hp, $id)) {
			echo $user->message('User updated successfully!',false);
		} else {
			echo $user->message('Failed to update an user!',true);
		}
	} else {
		echo $user->message('User not found!',true);
	}
}

// Delete an user from database
if ($api == 'DELETE') {
	if ($id != null) {
		if ($user->delete($id)) {
			echo $user->message('User deleted successfully!', false);
		} else {
			echo $user->message('Failed to delete an user!', true);
		}
	} else {
		echo $user->message('User not found!', true);
	}
}

?>