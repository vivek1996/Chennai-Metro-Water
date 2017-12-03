<?php

$conn=new mysqli("localhost","your_username","your_password") or die(mysqli_error());
$selecteddb=mysqli_select_db("database_name");
?>