<?php require_once('indexBoard.php');
if($tokenError){
	header('HTTP/1.1 401 Unauthorized');
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

if($loginpanel){
	echo '
		<h1>LÉPJ BE</h1>
		<form action="./" method="POST">
			<input type="text" name="userName" required>
			<input type="submit" value="Login">
		</form>
	';
if($redirectionAfterLoginScript){
echo '<script> document.cookie = "utok='. $token . ';" </script>';
echo 'Login process...';
header( "refresh:0.1;url=./" );
exit;
}
}

if($dashpanel){
	echo 'USER LOGGED IN as ' . $actualUserName .
	'<br>
	<button onclick="logout()">LOGOUT</button>
	<script>
	function logout(){
		document.cookie = "utok=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		         setTimeout(function(){
            window.location.href = "./";
         }, 5);
	}
	</script>
	'
	;
	exit;
}