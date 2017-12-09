<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chennai Metro Water</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#4b0082">
    <meta name="msapplication-navbutton-color" content="#4b0082">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.html" class="brand-logo indigo-text text-darken-2 "><img src="images/logo.jpg" height="50px " width="50px"><span class="hide-on-med-and-down">Chennai Metro Water</span> </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="logout.php">Log Out</a></li>
            <li><a href="admin.html"><i class="material-icons">arrow_back</i></a></li>
           <li></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="logout.php">Logout</a></li>

        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

<h4 class="center blue-text">Delete</h4>

    
<div id="up" class="col s12 center">
  <form action="samscript4.php" method="post">
      <div class="col s12 14">
            <input type="text" name="hno" placeholder="House Number">
            <input type="submit" class="btn" name="test"></div>
        </form>
    </div>


<?php
include 'connection.php';
// sql to delete a record
    if(isset($_POST["test"]))
    {
$House_number=isset($_POST["hno"])?$_POST["hno"]:false;
if($House_number==TRUE)
{
mysqli_query($conn,"DELETE FROM water WHERE hnumber=$House_number");
$aff= mysqli_affected_rows($conn);
if($aff>0)
{
    echo "<center>Delete successfull";
}
else if($aff==0)
    echo "<center>Entered data not found";
}
else
    echo "<center>Enter data correctly!!!</center>";
$conn->close();
}
?>
    </body>
</html>