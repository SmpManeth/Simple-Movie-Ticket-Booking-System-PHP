<?php include("../../path.php"); 
include($ROOT_PATH."/app/database/db.php");
include($ROOT_PATH . "/app/controllers/theater.php"); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
<link rel="stylesheet" href="../..assets//css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css" class="">
    <title>Admin Section - Add Theater</title>
</head>


<body>
<?php include($ROOT_PATH."/app/includes/adminHeader.php");?>

	<!-- admin page wrapper-->
<div class="admin-wrapper">
<!--left s;ide bar-->
<?php include($ROOT_PATH."/app/includes/adminSidebar.php");?>
<div class="admin-content">

<div class="button-group">
    <a href="create.php" class="btn btn-big">Add Theater</a>
    <a href="index.php" class="btn btn-big">Manage Theater</a>
</div>

<div class="content">
<h2 class="page-title">Add Theater</h2>

<?php include($ROOT_PATH."/app/helpers/formErrors.php");?>
 
<form action="create.php" method="post">
    <div>
        <label>Theater Name</label>
        <input type="text" name="Theater_name" value ='' class="text-input">
    </div>

    <div>
        <label>Theater Location</label>
        <input type="text" name="Theater Location" value ='' class="text-input">
    </div>

   
    <div>
        <button type="submit" name='add-theater' class="btn btn-big">Add Theater</button>
    </div>

</form>
</div>
</div>




</div>

    <!-- JQuery -->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/ckeditor5-build-classic/ckeditor.js"></script>
<script src="../../assets/js/scripts.js"></script>
<script src="../../assets/slick-1.8.1/slick/slick.min.js"></script>



</body>

</html>