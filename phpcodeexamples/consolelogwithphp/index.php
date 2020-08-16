<?php
function console_log( $string ){
  echo '<script>';
  echo 'console.log('.  $string  .')';
  echo '</script>';
}


$myvar = "EZ EGY PHP VÁLTOZÓBAN LÉVŐ STRING, AMIT A BÖNGÉSZŐ KONZOLLOGJÁBA SZERETNÉK KIÍRATNI";
console_log( $myvar );
?>
