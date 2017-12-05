<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$a=$_POST["hno"];
$b=$_POST["owe"];
$c=$_POST["ini"];
$d=$_POST["end"];
$e=$_POST["tot"];
$f=$_POST["cur"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE water SET hnumber=$a,oname='$b',iniread=$c,endread=$d,totcons=$e,curcost=$f WHERE hnumber=$a";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>