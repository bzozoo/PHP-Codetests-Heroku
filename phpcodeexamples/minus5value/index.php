<?php 

if(is_numeric($_GET["number"])){
echo htmlspecialchars($_GET["number"]) - 5; 
} else {
echo 'NOT A NUMBER';
}
?>
