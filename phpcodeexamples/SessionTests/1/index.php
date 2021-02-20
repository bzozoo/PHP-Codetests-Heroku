<?php
session_start();

$_SESSION["teszts"] = "Ez új egy teszt érték!";

$_SESSION["teszts2"] = "Ez egy másik teszt érték!";

echo "S_SESSION [teszts] = " . $_SESSION['teszts'] . " - S_SESSION [teszts2] = " . $_SESSION['teszts2'];