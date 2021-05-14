<?php

declare(strict_types=1);

use Firebase\JWT\JWT;

require_once('./vendor/autoload.php');

if(isset($_POST['jwttoken'])){

$jwt = $_POST['jwttoken'];
$secretKey  = '521016A2CE756433E88135DC833458ED3DD5941DE87EDCC20662E322922F67B5AE27BD687CACF8AC4473ED7525215E91DF4194651D55FE0D6E9768A7B56A38E9';
$token = JWT::decode($jwt, $secretKey, ['HS512']);
$now = new DateTimeImmutable();

if ($token->nbf > $now->getTimestamp() ||
    $token->exp < $now->getTimestamp())
{
    header('HTTP/1.1 401 Unauthorized');
    exit;
}
//header('Content-type: application/json');
//echo json_encode($token, JSON_PRETTY_PRINT);
echo var_dump($token);
echo '<p> YOUR USER ID : </p>';

echo $token->userId;

echo '<p> YOUR USER NAME : </p>';

echo $token->userName;

echo '<p> <a onclick="goBack()"><< Back </a> </p>
<script>
function goBack() {
  window.history.back();
}
</script>
';
}