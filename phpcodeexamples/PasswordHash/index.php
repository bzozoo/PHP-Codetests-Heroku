<?php

$the_passworld = "12345678";

$the_hash = password_hash($the_passworld, PASSWORD_DEFAULT);

echo $the_hash;

if (password_verify($the_passworld, $the_hash)) {
    echo '</br>Password is valid!';
} else {
    echo '</br>Invalid password.';
}
?>

