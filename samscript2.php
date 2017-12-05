<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/
include 'connection.php';
$House_number=$_POST["hno"];
$sql = "SELECT hnumber, oname, iniread, endread, totcons, curcost FROM water where hnumber=$House_number";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $res1=$row["hnumber"];

    print "<h2>" .$res1. "</h2>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 