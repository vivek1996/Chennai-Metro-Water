<?php
include 'connection.php';


//check if the username entered is in the database.
$test_query = "SELECT * FROM userdb WHERE username_field = '".$_POST[username]."'";
$query_result = mysqli_query($test_query);
//conditions
if(mysqli_num_rows($query_result)==0) {
//if username entered not yet exists
    echo "The username you entered is invalid.";
}else {
//if exists, then extract the password.
    while($row_query = mysqli_fetch_array($query_result)) {
        // check if password are equal
        if($row_query['password_field']==$_POST['password']){
            $_SESSION['password'] = $_POST['password'];
            header("Location: home.html");
            exit;
        } else{ // if not
            echo "Invalid Password";
        
        }
    }
}
if(empty($_SESSION)) // if the session not yet started
    session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
    header("Location: admin.html");
    exit;
}
?>