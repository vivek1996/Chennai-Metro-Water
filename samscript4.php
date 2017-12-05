<?php
include 'connection.php'
// sql to delete a record
$delete_id=$_POST['hno'];
$sql = "DELETE FROM water WHERE hnumber= $delete_id";

if ($conn->query($sql) === TRUE) {
    $msg="Record deleted successfully!!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
} else {
    $wrng="Error in deleting record";
    echo "<script type='text/javascript'>alert('$wrng');</script>";
}

$conn->close();
?>