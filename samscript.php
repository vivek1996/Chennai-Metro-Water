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
    <style>
    #Move
        {
            position: absolute;
            left: -150px;
        }</style>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo indigo-text text-darken-2 "><img src="images/logo.jpg" height="50px " width="50px"><span class="hide-on-med-and-down">Chennai Metro Water</span> </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="logout.php">Log Out</a></li>
            <li><a href="admin.html"><i class="material-icons" id="Move">arrow_back</i></a></li>
           <li></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="logout.php">Logout</a></li>
               <li><a href="admin.html">Back</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div class="center">
<h4 class="center blue-text">Add Customer Details</h4>
      <div class="row ">
    <form class="col s12 l6 m6" action="samscript.php" method="post">
      <div class="row">
        
        <div class="input-field col s12 l6 m6 ">
          <input id="last_name" name="hno" type="number" class="validate">
          <label for="last_name">House Number</label>
        </div>
      </div>
      <div class="input-field col s12 l6 m6 ">
          <input id="last_name" name="owe" type="text" class="validate">
          <label for="last_name">Owner Name</label>
        </div>
		<div class="input-field col s12 l6 m6 ">
          <input id="last_name" name="ini" type="number" class="validate">
          <label for="last_name">Initial Reading(In litre)</label>
        </div>
		<div class="input-field col s12 l6 m6 ">
          <input id="last_name" name="end" type="number" class="validate">
          <label for="last_name">Ending Reading(In litre)</label>
        </div>
		<div class="input-field col s12 l6 m6 ">
          <input id="last_name"  name="tot" type="number" class="validate">
          <label for="last_name">Total Consumption</label>
        </div>
       <div class="input-field col s12 l6 m6 ">
          <input id="last_name" name="cur" type="number" class="validate">
          <label for="last_name">Current Cost</label>
        </div>
		<button class="btn waves-effect waves-red blue" type="submit" name="test">Submit
                          <i class="material-icons right">send</i>
         </button>
    </form>
  </div>
</div>  
<?php
include 'connection.php';
    if (isset($_POST["test"]))
    {
$a=isset($_POST["hno"])?$_POST["hno"]:false;
$b=isset($_POST["owe"])?$_POST["owe"]:false;
$c=isset($_POST["ini"])?$_POST["ini"]:false;
    $d=isset($_POST["end"])?$_POST["end"]:false;
        $e=isset($_POST["tot"])?$_POST["tot"]:false;
        $f=isset($_POST["cur"])?$_POST["cur"]:false;

$sql = "INSERT INTO water values($a,'$b',$c,$d,$e,$f)";
/*
if ($conn->query($sql) === TRUE) {
    
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
if (mysqli_query($conn, $sql)) {
   print "<center>New Record Created Successfully</center>";
 
    /*
    header("Location: admin.html");
    */
} else {
    echo "<center>Enter Data Correctly</center>";
}

mysqli_close($conn);
    }
?>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
    
    </body>
</html>
