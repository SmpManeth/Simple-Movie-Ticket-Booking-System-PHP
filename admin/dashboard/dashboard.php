<?php include("../../path.php");?>
<?php include($ROOT_PATH."/app/controllers/posts.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Font Awesome -->
<link rel="stylesheet" href="../../assets/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css" class="">
    <title>Admin Section -Dashboard</title>
</head>


<body>
<?php include($ROOT_PATH."/app/includes/adminHeader.php");?>


	<!-- admin page wrapper-->
<div class="admin-wrapper">
<!--left s;ide bar-->
<?php include($ROOT_PATH."/app/includes/adminSidebar.php");?>
<div class="admin-content">


<div class="content">
<h2 class="page-title">Dashboard</h2>
<?php include($ROOT_PATH."/app/includes/messages.php");?>

</div>
</div>

</div>



    <!-- JQuery -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="../../assets/js/scripts.js"></script>




</body>

</html>