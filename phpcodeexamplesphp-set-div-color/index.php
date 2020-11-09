<?php

$color = (empty($_GET["color"])) ? "Nincs megadva szín" : htmlspecialchars(($_GET["color"]));
$containertext = (empty($_GET["text"])) ? "WELCOME !" : htmlspecialchars($_GET["text"]);
echo "Actual color: $color";

?>

<div id="container" style="margin: 5px; background-color: red; color: white; width: 500px; padding: 5px;">
<? echo$containertext; ?> 
</div>

<script>
const container = document.querySelector('#container');
container.style.backgroundColor = "<? echo$color; ?>";
container.innerHTML = "<? echo$containertext; ?>";
</script>
