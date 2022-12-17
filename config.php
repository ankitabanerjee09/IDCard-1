<?php


    
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "form";

$con = mysqli_connect($sname, $unmae, $password, $db_name);


if (!$con) 
{
    echo " Joining unsuccessful";
}
// if ($con) 
// {
//     echo " Welcome";
// }
?>