<?php
require "register.php";

if(isset($_POST["studid"])){

		$studid=$_POST["studid"]; 
		$email=$_POST["email"]; 


	$sql1 = "UPDATE regis SET email='$email' WHERE studid='$studid'";
	if (mysqli_query($con, $sql1)) {
		  	echo "record updated";
	}
}
else {  
echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);
?>
