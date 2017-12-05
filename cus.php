<html>
<head>
<title>delete</title>
</head>
<body bgcolor="#232234">
<form method="post" action="cus.php">
Enter the house no:<input type="text" name="no">
<input type="submit" value="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ID = isset($_POST['ID']) ? $_POST['ID'] : false;
include 'connection.php';
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
</body>
</html>