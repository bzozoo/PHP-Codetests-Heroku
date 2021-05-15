<?php require_once('componentToken.php');
$Token = new Token();

$dashpanel = false;
$loginpanel = false;
$actualUserName = false;
$tokenError = false;
$redirectionAfterLoginScript = false;

if(isset($_COOKIE['utok'])) {
try{
$User = $Token->checkToken($_COOKIE['utok']);
$dashpanel = true;
$actualUserName = $User->userName;
}catch(\Firebase\JWT\ExpiredException $e){
	 $tokenError = true;
	 $loginpanel = true;
}
} else {
	$loginpanel = true;
}

if(isset($_POST['userName'])){
$tokenUser = $_POST["userName"];
$tokenUserId = '2000';
$tokenUserSecret = 'djbfoeuboibuodubeoibeiewui8hzo9d3u4o832iug38h2eir3u8r29eujihr3fr829euojiefh32u9e9ihefi83r2u9o';

$token = $Token->getToken($tokenUser, $tokenUserId, $tokenUserSecret);
if(isset($token)){
$redirectionAfterLoginScript = true;
}
}
