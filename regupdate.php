<?php
require "register.php";

$sqlid="Doe";

$sql = "UPDATE regis SET email='john@rediff.com' WHERE studid='$sqlid'";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>