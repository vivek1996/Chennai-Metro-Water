<?php
include 'connection.php';
$num=$_POST['hno'];
$name=$_POST['owe'];
$ini=$_POST['ini'];
$end=$_POST['end'];
$tot=$_POST['tot'];
$cur=$_POST['cur'];

$sql = "INSERT INTO water (hnumber, oname, iniread, endread, totcons, curcost) values('$num','$name','$ini','$end','$tot','$cur')";
/*
if ($conn->query($sql) === TRUE) {
    
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
if (mysqli_query($conn, $sql)) {
    $message="New Record Created Successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    /*
    header("Location: admin.html");
    */
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>