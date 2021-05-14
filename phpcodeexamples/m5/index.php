<?php 
header("Content-Type: application/json");

header('Access-Control-Allow-Origin: *');

if(is_numeric($_GET["number"])){
	$calc =  $_GET["number"] - 5;
	$calc2 = $_GET["number"] + 5;
$result = array("number" => $calc, "numberplus" => $calc2);
echo json_encode($result); 
} else {
echo 'NOT A NUMBER';
}
?>