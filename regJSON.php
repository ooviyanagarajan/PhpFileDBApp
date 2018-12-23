<?php
require "register.php";

$details = array(); 

$sql = "SELECT studid, studname, email FROM regis";
$stmt = $con->prepare($sql);
$stmt->execute();
$stmt->bind_result($studid, $studname, $email);

while($stmt->fetch()){
 
 $temp = [
 'studid'=>$studid,
 'studname'=>$studname,
 'email'=>$email
 ];

array_push($details, $temp);
}
 

echo json_encode($details);