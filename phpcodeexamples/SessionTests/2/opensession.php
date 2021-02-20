<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');


if(isset($_COOKIE["PHPSESSID"])){
	session_start();
	$data = Array(
	     "DataQuery" => "Success",
		 "ActualSessionID" => session_id(),
		 "SessionTime" => $_SESSION["SessionTime"],
		 "SessionUserName" => $_SESSION["SessionUname"],
		 "SessionValue" => $_SESSION["SessionValue"],
		 "DirectAccess" => True);
	echo json_encode($data);
	exit;
}

//echo $_POST['sessonID'];

if(isset($_POST['sessionID']) && $_POST['sessionID'] != 'undefined' ){
$thesessionid = $_POST['sessionID'];
session_id($thesessionid);
session_start();

if(isset($_SESSION["SessionTime"]) || isset($_SESSION["SessionValue"])){
	
$data = Array(
      "DataQuery" => "Success",
	  "ActualSessionID" => session_id(),
	  "SessionTime" => $_SESSION["SessionTime"],
	  "SessionUserName" => $_SESSION["SessionUname"],
	  "SessionValue" => $_SESSION["SessionValue"],
	  "DirectAccess" => False);

} else {
	$data = Array(
	      "DataQuery" => "Failed",
		  "ActualSessionID" => "Failed",
		  "SessionTime" => "Failed",
		  "SessionUserName" => "Failed",
		  "SessionValue" => "Failed");
}


} else {

$data = Array("
       DataQuery" => "Failed",
	   "ActualSessionID" => "Failed",
	   "SessionTime" => "Failed",
	   "SessionUserName" => "Failed",
	   "SessionValue" => "Failed");
}

echo json_encode($data);
