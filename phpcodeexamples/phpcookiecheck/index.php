<?php

if(isset($_SERVER["HTTP_REFERER"])){
$rest = substr($_SERVER["HTTP_REFERER"], 0, -1);
} else { $rest = "*";}
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: ' . $rest . '');

echo 'Hello ' . htmlspecialchars($_COOKIE["actualcookie"]) . '!';




?>