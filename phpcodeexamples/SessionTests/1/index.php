<?php
session_start();

$_SESSION["teszts"] = "Ez új egy teszt érték";

echo $_SESSION["teszts"];
