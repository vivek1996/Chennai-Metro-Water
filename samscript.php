<?php
include 'connection.php';   
$sql = "INSERT INTO water values($_POST[hno],'$_POST['owe']',$_POST['ini'],$_POST["end"],$_POST["tot"],$_POST["cur"])";

if ($conn->query($sql) === TRUE) {
    
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>