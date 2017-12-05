<?php
include 'connection.php';

if(empty($_SESSION)) // if the session not yet started
    session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
    header("Location: updateele.html");
    exit;
}