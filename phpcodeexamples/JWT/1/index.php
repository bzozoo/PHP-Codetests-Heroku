<?php

declare(strict_types=1);

use Firebase\JWT\JWT;

require_once('./vendor/autoload.php');

if(isset($_POST['userName'])){
$secretKey  = '521016A2CE756433E88135DC833458ED3DD5941DE87EDCC20662E322922F67B5AE27BD687CACF8AC4473ED7525215E91DF4194651D55FE0D6E9768A7B56A38E9';
$issuedAt   = new DateTimeImmutable();
$expire     = $issuedAt->modify('+6 minutes')->getTimestamp();      // Add 60 seconds
$serverName = "your.domain.name";
$username   = $_POST['userName'];
$userid = '3000';


$data = [
    'iat'  => $issuedAt->getTimestamp(),         // Issued at: time when the token was generated
    'iss'  => $serverName,                       // Issuer
    'nbf'  => $issuedAt->getTimestamp(),         // Not before
    'exp'  => $expire,                           // Expire
    'userName' => $username,                     // User name
	'userId' => $userid,
];

echo 'JWT token generated: <br>';

$jwttoken = JWT::encode(
        $data,
        $secretKey,
        'HS512'
    );


echo $jwttoken;	
?>

<br>
<form action="decode.php" method="POST">
<input type="hidden" name="jwttoken" value="<?php echo $jwttoken; ?>">
<input type="submit" value="DECODE THIS TOKEN">
</form>
<br>
<?php } ?>

<h1>GENERATE A JWT TOKEN:</h1>
<br>
<form action="" method="POST">
USER ID : 3000; YOUR USERNAME: <input type="text" name="userName" required>
<input type="submit" value="GENERATE A TOKEN">
</form>