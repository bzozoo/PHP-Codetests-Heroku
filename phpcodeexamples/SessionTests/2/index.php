<?php


session_start();

$_SESSION["SessionTime"] = time();

$_SESSION["SessionUname"] = (isset($_POST["Uname"])) ? $_POST["Uname"] : "Guest"; 

$_SESSION["SessionValue"] = "Ez egy teszt érték!";

$data = Array("SessionID" => session_id(), "SessionTime" => $_SESSION["SessionTime"], "SessionUserName" => $_SESSION["SessionUname"], "SessionValue" => $_SESSION["SessionValue"]);

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo json_encode($data);