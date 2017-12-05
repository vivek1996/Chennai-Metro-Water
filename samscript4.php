<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$hno=$_POST["hno"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM water WHERE hnumber=$hno";

if ($conn->query($sql) === TRUE) {
    $msg="Record deleted successfully!!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
} else {
    $wrng="Error in deleting record";
    echo "<script type='text/javascript'>alert('$wrng');</script>";
}

$conn->close();
?>