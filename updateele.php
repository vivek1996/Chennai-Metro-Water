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
 
    
    
    </style>
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
        <div id="bck"><a href="admin.html">Back</a></div>
        <ul id="nav-mobile" class="sidenav">
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

<h4 class="center blue-text">Update Your Details</h4>

    
<div id="up" class="col s12 center">
  <form action="updateele.php" method="post">
      <div class="col s12 l4">
            <input type="text" name="hno" placeholder="House Number">
          <input type="text" name="owe" placeholder="House owner name">
      <input type="text" name="ini" placeholder="Initial reading">
      <input type="text" name="end" placeholder="Ending Number">
      <input type="text" name="tot" placeholder="Total consumption">
      <input type="text" name="cur" placeholder="Current Cost">
            <input type="submit" class="btn" name="test"></div>
        </form>
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
        if($a==TRUE && $b==TRUE && $c==TRUE && $d==TRUE && $e==TRUE && $f==TRUE)
        {
            mysqli_query($conn,"UPDATE water SET hnumber=$a,oname='$b',iniread=$c,endread=$d,totcons=$e,curcost=$f WHERE hnumber=$a");
$aff= mysqli_affected_rows($conn);
if($aff>0)
{
    echo "<center>Update successfull<center>";
}
else if($aff==0)
    echo "<center>Entered data not found<center>";
}
else
    echo "<center>Enter the data correctly<center>";
$conn->close();
    }
    ?>
    
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>

