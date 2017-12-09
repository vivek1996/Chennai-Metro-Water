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
        #use
        {
            position: absolute;
            top: 100px;
        }
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

        <ul id="nav-mobile" class="sidenav">
            <li><a href="logout.php">Logout</a></li>

        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<center><img src="images/user.png" alt="User-img" width="50px" height="50px" id="use"></center>
<h4 class="center blue-text">User Screen</h4>
<div class="row center">
    <div class="col s12">
            <a href="#test1"><span class="black-text center">Enter the details</span></a>
      </div>
   
<div class="col s12">
  <form action="view.php" method="post">
      <div class="col s12 l2">
            <input type="text" name="hno" placeholder="House Number">
            <input type="submit" class="btn" name="test">
      </div>
  </form>
</div>
    </div>
  
    <?php
include 'connection.php';
    /*if($_SERVER['REQUEST_METHOD']=='POST')*/
        if(isset($_POST["test"]))
    {
$House_number=isset($_POST["hno"])?$_POST["hno"]:false;
        
if($House_number==TRUE){
$sql = "SELECT hnumber, oname, iniread, endread, totcons, curcost FROM water where hnumber=$House_number";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $res1=$row["hnumber"];
        $res2=$row["oname"];
        $res3=$row["iniread"];
        $res4=$row["endread"];
        $res5=$res4-$res3;
        $res6=$row["curcost"];
        $res7=$res5*$res6;
print "<table><tr><th>House Number</th><th>Owner Name</th><th>Initial Reading</th><th>Ending Reading</th><th>Total consumption</th><th>Current Cost</th><th>Total cost</th></tr><tr><td>$res1</td><td>$res2</td><td>$res3</td><td>$res4</td><td>$res5</td><td>$res6</td><td>$res7</td></tr></table>";
         $conn->close();

    }
    

} 
else {
    echo "<center>No Such Record Found</center>";
}
}
        else {
    echo "<center>Enter data correctly</center>";
}
    }
    
?> 
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>

