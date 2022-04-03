<?php
session_start();
include("path.php");
$pid = array();
$uid = 0;
$rowcount = 0;
$qnt = array();
include("code.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">


    <!-- Custom Styling -->

    <link rel="stylesheet" href="assets/css/style.css">


    <title> Checkout | Summer Style </title>
</head>

<body>
    <?php include($ROOT_PATH . "/app/includes/header.php"); ?>
<style>
.hM{
    justify-content: center;
    text-align: center;
    font-family: fantasy;
    color: darkgray;
    font-size: 50px;
}
p{
    font-size: 30px;
    justify-content: center;
    text-align: center;
    font-family: fantasy;
}
</style>

<div class="bodycontent">
<br>
<h1 class="hM">Congratulations you have Placed the Order</h1>
<p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
</div>

    <!-- JQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/slick-1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>