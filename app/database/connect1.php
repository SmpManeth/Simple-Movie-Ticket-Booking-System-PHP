<?php

// This for our virtual server
$host = "127.0.0.1";
$user = "root";
$pass = ""; 
$db_name = "cinema";

$conn = new MySQLi($host, $user, $pass, $db_name);

if($conn->connect_error){
    die('Database connection error' . $conn->connect_error);

}
 