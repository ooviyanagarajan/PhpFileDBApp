<?php
require "register.php";

$sqlid="sqid";

$sql2 = "DELETE FROM regis WHERE studid='$sqlid'";

if ($con->query($sql2) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?> 
