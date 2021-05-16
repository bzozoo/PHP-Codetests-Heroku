<?php require_once('indexBoard.php');

if(isset($_SERVER["HTTP_REFERER"])){
    $restprefix = ($_SERVER['HTTPS'] == 'on') ? "https://" : "http://";
    
    $rest = $restprefix . parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
    } else {
         $rest = "*";
    }
    
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Origin: ' . $rest . '');
	header("Content-Type: application/json");
	
if($tokenError){
	header('HTTP/1.1 401 Unauthorized');
    echo json_encode(json_decode('{"Error": "'. $errorMessage . '"}'), JSON_PRETTY_PRINT);
    exit;
}

if($getTokenIfLoginSuccess){
	echo json_encode(json_decode('{"Login": "Success", "UTOK": "' .  $token . '", "Error": "false"}'), JSON_PRETTY_PRINT);
	exit;
}

if($dashpanel){
	echo json_encode(json_decode('{"UserName": "' . $actualUserName .'", "Error": "false"}'), JSON_PRETTY_PRINT);
	exit;
}

header('HTTP/1.1 401 Unauthorized');
echo json_encode(json_decode('{"Error": "' . $errorMessage .'", "LoggedIn": "false"}'), JSON_PRETTY_PRINT);