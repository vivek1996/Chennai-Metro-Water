<?php

session_start();
session_destroy();
$home_url = 'index.html' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
header('Location: ' . $home_url);
?>