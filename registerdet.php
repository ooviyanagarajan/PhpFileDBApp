<?php
require "register.php";
$sqname = $_POST["studname"]; 
$sqid = $_POST["studid"]; 
$sqemail = $_POST["email"]; 


$sql = "INSERT INTO regis (studname, studid, email)
VALUES ('$sqname', '$sqid', '$sqemail')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully!!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


?>