<?php include("../../path.php");?>
<?php include($ROOT_PATH."/app/controllers/users.php");?>

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
    <title>Admin Section - Add Users</title>
</head>


<body>
<?php include($ROOT_PATH."/app/includes/adminHeader.php");?>

	<!-- admin page wrapper-->
<div class="admin-wrapper">
<!--left s;ide bar-->
<?php include($ROOT_PATH."/app/includes/adminSidebar.php");?>
<div class="admin-content">

<div class="button-group">
    <a href="create.php" class="btn btn-big">Add Users</a>
    <a href="index.php" class="btn btn-big">Manage Users</a>
</div>

<div class="content">
<h2 class="page-title">Add Users</h2>

<?php include($ROOT_PATH."/app/helpers/formErrors.php");?>
 
<form action="create.php" method="post">
    <div>
        <label>Username</label>
        <input type="text" name="username" value ='<?php echo $username;?>' class="text-input">
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value ='<?php echo $email;?>' class="text-input">
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password" value ='<?php echo $password;?>' class="text-input">
    </div>

    <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" class="text-input">
    </div>

    <div>

    <?php if (isset($admin) && $admin ==1): ?>
        <label>
        <input type="checkbox" name="admin" checked>
        Admin
        </label>
    <?php else: ?>
        <label>
        <input type="checkbox" name="admin">
        Admin
        </label>
    <?php endif; ?>

        
    </div>
    <div>
        <button type="submit" name='create-admin' class="btn btn-big">Add Users</button>
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