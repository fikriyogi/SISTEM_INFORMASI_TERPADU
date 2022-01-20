<?php

$people_json = file_get_contents('read-api.php');

$decoded_json = json_decode($people_json, true);

foreach($decoded_json as $key => $e) {
    $name = $decoded_json[$key]["nama"];
    $age = $decoded_json[$key]["alias"];
    
    echo $name.' is '.$age.' years old.';
}