<?php
$db_name = "register";

$server_name = "localhost";
$user ="root";
$pass= "";
$con = mysqli_connect($server_name, $user, $pass, $db_name); 
if($con)
{  
echo "connected..";
}  
else
{
echo "Not Connected..";
}

?>