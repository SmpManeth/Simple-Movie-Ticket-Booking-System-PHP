<?php include("../../path.php");?>
<?php include($ROOT_PATH."/app/controllers/users.php");?>
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
    <title>Admin Section - Manage users</title>
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
<h2 class="page-title">Manage Users</h2>
<?php include($ROOT_PATH."/app/includes/messages.php");?>
<table>
    <thead>
        <th>SN</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Role</th>

        <th colspan="2">Action</th>
    </thead>

    <tbody>
        <!--checking whether user is a admin or a user-->
    <?php  foreach ($admin_users as $key => $user): ?>
    <?php if ($user['admin'] == 1) 
        $admin='Admin';
    elseif ($user['admin'] ==0) 
        $admin='User';

        ?>
        <tr>
            <td><?php echo $key +1 ; ?></td>
             <td><?php echo $user['username'] ; ?></td>
             <td><?php echo $user['email'] ; ?></td>
             <td><?php echo $admin; ?></td>
             <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
             <td><a href="index.php?del_id=<?php echo $user['id']; ?>" class="delete">Delete</a></td>
        </tr>

    <?php endforeach;  ?>

        



    </tbody>
</table>
</div>
</div>




</div>

    <!-- JQuery -->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/scripts.js"></script>
<script src="../../assets/slick-1.8.1/slick/slick.min.js"></script>



</body>

</html>