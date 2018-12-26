<?php
require "register.php";

if(isset($_POST["studid"]))
{  
   $studid = $_POST["studid"];
   $sql ="DELETE FROM regis WHERE studid=$studid";

   if (mysqli_query($con, $sql)) {
     echo "One record deleted";
   } 
}
else {
  echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?> 
