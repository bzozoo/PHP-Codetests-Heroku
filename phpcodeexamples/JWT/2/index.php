<?php require_once('componentToken.php');
$Token = new Token();

if(isset($_COOKIE['utok'])) {
try{
$User = $Token->checkToken($_COOKIE['utok']);
}catch(\Firebase\JWT\ExpiredException $e){
	 header('HTTP/1.1 401 Unauthorized');
     echo 'Caught exception: ',  $e->getMessage(), "\n";

     exit;
}
echo 'USER LOGGED IN as ' . $User->userName;
exit;
}

if(!isset($_COOKIE['utok'])) {
	echo '
		<h1>LÉPJ BE</h1>
		<form action="./" method="POST">
			<input type="text" name="userName" required>
			<input type="submit" value="Login">
		</form>
	';
}

if(isset($_POST['userName'])){
$tokenUser = $_POST["userName"];
$tokenUserId = '2000';
$tokenUserSecret = 'djbfoeuboibuodubeoibeiewui8hzo9d3u4o832iug38h2eir3u8r29eujihr3fr829euojiefh32u9e9ihefi83r2u9o';

$token = $Token->getToken($tokenUser, $tokenUserId, $tokenUserSecret);
if(isset($token)){
echo '<script> document.cookie = "utok='. $token . ';" </script>';
echo 'Login process...';
header( "refresh:0.1;url=./" );
}
}
