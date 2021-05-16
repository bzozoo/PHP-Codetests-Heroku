<?php require_once('componentToken.php');
$Token = new Token();

$dashpanel = false;
$loginpanel = false;
$actualUserName = false;
$tokenError = false;
$getTokenIfLoginSuccess = false;
$errorMessage = "We could not get any data";

if(isset($_POST['chkTok'])) {

foreach (getallheaders() as $name => $value) {
    if($name === 'Bearer'){
		$gettedjwt = $value;
	}
}

//foreach (getallheaders() as $name => $value) {  
	//	echo '{"'. $name . '":"'. $value . '"},';
//}

if(!isset($gettedjwt)){
	$errorMessage = "Bearer not found in header";
}
if(isset($gettedjwt)){
try{

$User = $Token->checkToken($gettedjwt);
$dashpanel = true;
$actualUserName = $User->userName;

}catch(\Firebase\JWT\ExpiredException $e){
	 $errorMessage = $e->getMessage();
	 $tokenError = true;
}
}
}

if(isset($_POST['userName'])){

$tokenUser = $_POST["userName"];
$tokenUserId = '2000';
$tokenUserSecret = 'djbfoeuboibuodubeoibeiewui8hzo9d3u4o832iug38h2eir3u8r29eujihr3fr829euojiefh32u9e9ihefi83r2u9o';

$token = $Token->getToken($tokenUser, $tokenUserId, $tokenUserSecret);
if(isset($token)){
	
$getTokenIfLoginSuccess = true;
}
}
