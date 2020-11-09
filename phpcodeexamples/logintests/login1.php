<?php
$users = array();
$users["admin"] = "admin";
$users["Zoltan"] = 12345;
$users["Zoltan"] = 678910;
$users["Istvan"] = "istvanbelep";
$users["Pali"] = "palibelep";
$users["Jozsi"] = "jozsibelep";

if(isset($_POST['btnlogin']))
{
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    foreach($users as $username => $password) 
    {
        if($username == $uname && $password == $pass) 
        {
            $msg = "<p>A belépés sikeres! " . $username . " </p>";

            //if success break the loop
            break;
        }
        else
        {
           $msg = "<p>A belépés sikertelen</p>";
        }
    }
    echo $msg;
} 
else
{
   $msg = "<p>Nem küldtél be adatokat</p>";
   echo $msg;
}
?>
