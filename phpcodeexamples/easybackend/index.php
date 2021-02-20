<?php
// Frontend script for this backend
// https://codepen.io/bzozoo/pen/yLVoQxo?editors=0010

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

if(isset($_POST['kapottadat']) && is_numeric($_POST['kapottadat'])){
	
	$kapottSzamAdat = $_POST['kapottadat'];
	$data = Array(
	    'Dupla' => $kapottSzamAdat * 2,
		'Felez' => $kapottSzamAdat / 2,
		'Hozzaad' => $kapottSzamAdat + 1,
		'Levon' => $kapottSzamAdat -1,
		'Hello' => "Hello " . $kapottSzamAdat . "!",
		'Visszakap' => $kapottSzamAdat,
		'Error' => false
	);
	
	echo json_encode($data, JSON_PRETTY_PRINT);
} else {
	$data = Array(
	'Error' => true
	);
	echo json_encode($data, JSON_PRETTY_PRINT);
}