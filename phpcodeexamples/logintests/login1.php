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
   $msg = "<p>Nem küldtél be adatokat!</p> <p>A scriptnek HTML form készítésével tudsz username és password értéket küldeni btnlogin nevezetű submit gombbal POST metódussal </p> 
           <p>3 felhasználónév és jelszó fogad el a script, erre írja ki, hogy a belépés sikeres. Ezt a 3 felhasználónév és jelszó párost a Facebopok csoportban <a href='https://www.facebook.com/groups/ujratervezesprogram/permalink/658237725058586/' target='blank'>megadtam</a>.</p>";
   echo $msg;
}
?>
