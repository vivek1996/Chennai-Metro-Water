<!DOCTYPE html>
<html lang="en_IN">
<head>
    <meta charset="UTF-8">
    <title>Chennai Metro Water</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#4b0082">
    <meta name="msapplication-navbutton-color" content="#4b0082">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="myscript.js"></script>
</head>
    <style>
    .page-footer {
	background-color: white;
}
        #foot,#foot1 {
	color: black;
}
        #move
        {
            position: absolute;
            left: 880px;
            top:2985px;
        }
    #move1
        {
           position: absolute;
            top:2970px;
            left: 930px;
            color: black;
        }
        #move2
        {
            position: absolute;
            left: 930px;
            top:2990px;
            color: black;
        }
        #move3
        {
            position: absolute;
            left: 1060px;
            top: 2985px;
        }
        #move4
        {
            position: absolute;
            left: 1110px;
            top:2970px;
            color: black;
        }
        #move5
        {
            position: absolute;
            left: 1110px;
            top: 2990px;
            color: black;
        }
       
    
    </style>
<body>

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo indigo-text text-darken-2 "><img src="images/logo.jpg" height="50px " width="50px"><span class="right hide-on-med-and-down">Chennai Metro Water</span> </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#contact">Contact Us </a></li>
          <li ><a href="#admin">Admin</a> </li>
          <li><a href="#reg">Register</a></li>
              <li><a href="#contact">About CMW</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#contact">Contact Us</a></li>
         <li><a href="#admin">Admin</a></li>
          <li><a href="#reg">Register</a> </li>
              <li><a href="#contact">About CMW</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<div class="slider">
    <ul class="slides">
      <li>
        <img src="images/5-ways-to-save-water.jpg"> <!-- random image -->
        <div class="caption center-align">
       <h1 class="header center blue-text text-darken-4">Customer Login</h1>
            <div class="row center">
          <h5 class="header col s12 light black-text">To Pay and Manage Your Bill Login Here</h5>
        </div>
            <div class="row center">
          <a href="#login" class="btn-large waves-effect waves-light blue">Login in</a>
        </div>
        </div>
      </li>
      <li>
        <img src="images/slideshow1.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>A drop of water is worth more than a sack of gold to a thirsty man.</h3>
            <div class="row center">
          <a href="#login" class="btn-large waves-effect waves-light blue">Login in</a>
        </div>
        </div>
      </li>
      <li>
        <img src="images/slideshow2.jpg"> <!-- random image -->
        <div class="caption right-align">
            <h3>You never know the worth of water until the well runs dry.</h3>
             <div class="row center">
          <a href="#login" class="btn-large waves-effect waves-light blue">Login in</a>
        </div>
        </div>
      </li>
      <li>
        <img src="images/slideshow3.jpg"> <!-- random image -->
        <div class="caption center-align">
            <h3>Conserve water, conserve life.</h3>
            <div class="row center">
          <a href="#login" class="btn-large waves-effect waves-light blue">Login in</a>
        </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="container center" id="login">
    <div class="section ">

      <!--   Icon Section   -->
      <div class="row  ">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons ">edit</i></h2>
            <h5 class="center">User Login</h5>
              <div class="row">
                  <form class="col s12" method="post" action="userlogin.php">
                      <div class="row">
                          <div class="input-field col s12 m10 l6">
                              <i class="material-icons prefix " style="font-size: 2rem">account_circle</i>
                              <input id="icon_prefix" type="text" name="user_name" class="validate">
                              <label for="icon_prefix">User Name</label>
                          </div>
                          <div class="input-field col s12 m10 l6">
                              <i class="material-icons prefix" style="font-size: 2rem">lock</i>
                              <input id="icon_telephone" type="password" name="user_pass" class="validate">
                              <label for="icon_telephone">Password</label>
                          </div>
                      </div>
                      <button class="btn waves-effect waves-red blue" type="submit" name="action">Submit
                          <i class="material-icons right">send</i>
                      </button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 darken-4 white-text text-darken-4">Save Water , Save Future</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/Z24kY17.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row" id="admin">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Admin Login</h4>
            <div class="row">
                <form class="col s12"  action="adminlogin.php" method="post">
                    <div class="row">
                        <div class="input-field col s12 m10 l6">
                            <i class="material-icons prefix " style="font-size: 2rem">account_circle</i>
                            <input id="icon_prefix" type="text" name="admin_name" class="validate">
                            <label for="icon_prefix">User Name</label>
                        </div>
                        <div class="input-field col s12 m10 l6">
                            <i class="material-icons prefix" style="font-size: 2rem">lock</i>
                            <input id="icon_telephone" type="password" name="admin_pass" class="validate">
                            <label for="icon_telephone">Password</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-red blue" type="submit" name="admin_login">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12  green-text text-darken-4">Spread Green</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/Crise-hidrica.jpg" alt="Unsplashed background img 3"></div>
  </div>
    <div class="container">
    <div class="section">

      <div class="row" id="reg">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Register</h4>
            <div class="row">
                <form class="col s12"  action="index.php" method="post">
                    <div class="row">
                        <div class="input-field col s12 m10 l6">
                            <i class="material-icons prefix " style="font-size: 2rem">perm_identity</i>
                            <input id="icon_prefix" type="text" name="Name" class="validate">
                            <label for="icon_prefix">User Name</label>
                        </div>
                        <div class="input-field col s12 m10 l6">
                            <i class="material-icons prefix" style="font-size: 2rem">mail</i>
                            <input id="icon_prefix" type="text" name="user_name" class="validate">
                            <label for="icon_telephone">Email</label>
                        </div>
                         <div class="input-field col s12 m10 l6">
                            <i class="material-icons prefix" style="font-size: 2rem">lock</i>
                            <input id="icon_telephone" type="password" name="user_pass" class="validate">
                            <label for="icon_telephone">Password</label>
                        </div>
                         <div class="input-field col s12 m10 l6">
                            <i class="material-icons prefix" style="font-size: 2rem">lock</i>
                            <input id="icon_telephone" type="password" name="check" class="validate">
                            <label for="icon_telephone">Retype Password</label>
                        </div>
                    </div>
                    <center><b>Note:</b> Your Email-id will be your username</center><br>
                    <button class="btn waves-effect waves-red blue" type="submit" name="user_login">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
      </div>

    </div>
  </div>
    <?php
include 'connection.php';
    if (isset($_POST["user_login"]))
    {
$a=isset($_POST["Name"])?$_POST["Name"]:false;
$b=isset($_POST["user_name"])?$_POST["user_name"]:false;
$c=isset($_POST["user_pass"])?$_POST["user_pass"]:false;
$d=isset($_POST["check"])?$_POST["check"]:false;
$sql = "INSERT INTO login1 values('$b','$c')";
if(strlen($b)>1 && strlen($c)>1)
{
if($a!='' && $b!='' && $c!='' && $d!='')
{
if($c==$d)
{
if (mysqli_query($conn, $sql)) {
   print "<center>Registration is successfull</center>";
} else {
    echo "<center>Registration is not successful</center>";
}
}
else
{
echo "<center>Password does not match</center>";
}
}
else
{
    echo "<center>You must filled the above textbox</center>";
}
}
else
    echo "<center>Username and password must be greater than 1 character</center>";

mysqli_close($conn);
    }
?>
    <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12  blue-text text-darken-4">It takes a lot of blue to stay green</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/how-to-save-water1.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer">
    <div class="container">
      <div class="row" id="contact">
        <div class="col l6 s12">
          <h5 class="blue-text">Chennai Metro Water</h5>
          <p id="foot">Chennai Metropolitan Water Supply and Sewerage Board (CMWSSB) in Tamilnadu, has formulated a set of service standards, good quality chennai metro water supply, chennai rainwater harvesting, chennai online water complaints, responsible tax collections, treatment and disposal of wastewater.</p>


        </div>
          <div class="col m6 l3 s12">
          <h5 class="blue-text">Contact:</h5>
              <ul id="foot1">
              <li>Ten Stars</li>
              <li>K.S.R.C.T</li>
              <li>Tiruchengode</li>
              <li>Namakkal(Dt)</li>
              </ul>
          </div>
      </div>
    </div>
             
          <div class="footer-copyright white">
            <div class="container">
                  <div class="col l6 s12">
                <a class="btn-floating btn-medium waves-effect waves-light blue" id="move"><i class="material-icons">local_phone</i></a>
          <p id="move1">9750746807</p>
          <p id="move2">8508228567</p>
          <a class="btn-floating btn-medium waves-effect waves-light blue" id="move3"><i class="material-icons">email</i></a>
          <p id="move4">srinivasanksr15@gmail.com</p>
          <p id="move5">mvivek3112@gmail.com</p>
            </div>
          </div>
      </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
