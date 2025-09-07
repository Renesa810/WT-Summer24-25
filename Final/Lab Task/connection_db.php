<?php
$host = "localHost";
$user = "root";
$pass = "";
$dbname= "labtask";

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn -> connect_error)
{
    die ("Conncetion Fail". $conn-> connect_error);
}



