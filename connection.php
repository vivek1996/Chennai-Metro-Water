<?php

$conn=new mysqli("localhost","root","") or die(mysqli_error($conn));
$selecteddb=mysqli_select_db($conn,"test");
?>