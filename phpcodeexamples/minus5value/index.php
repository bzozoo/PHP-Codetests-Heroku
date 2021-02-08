<?php 

if(is_int($_GET["number"])){
echo htmlspecialchars($_GET["number"]) - 5; 
} else {
echo 'NOT A NUMBER';
}
?>
