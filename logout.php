<?php
//importing baseurl variable in the path.php
include("path.php");

session_start();
//unset all values taken by the user.
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);


session_destroy();

//redirect to the homepage
header('location: ' . $BASE_URL . 'index.php');
