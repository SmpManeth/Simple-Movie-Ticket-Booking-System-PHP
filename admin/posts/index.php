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
    <title>Admin Section - Manage Movies</title>
</head>


<body>
<?php include($ROOT_PATH."/app/includes/adminHeader.php");?>



	<!-- admin page wrapper-->
<div class="admin-wrapper">
<!--left s;ide bar-->
<?php include($ROOT_PATH."/app/includes/adminSidebar.php");?>
<div class="admin-content">

<div class="button-group">
    <a href="create.php" class="btn btn-big">Add Movies</a>
    <a href="index.php" class="btn btn-big">Manage Movies</a>
</div>

<div class="content">
<h2 class="page-title">Manage Movies</h2>
<?php include($ROOT_PATH."/app/includes/messages.php");?>
<table>
    <thead>
        <th>SN</th>
        <th>Title of the Movies</th>
        <th colspan="3">Action</th>
    </thead>

    <tbody>
    <!--fetching post dertails-->
        <?php  foreach ($posts as $key => $post): ?>
				
            <tr>
                <td><?php echo $key +1 ; ?></td>
                <td><?php echo $post['title'] ; ?></td>
                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                <td><a href="edit.php?del_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>

                <?php if ($post['published']): ?>
                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>"class="unpublish">Unpublish</a></td>
                <?php else: ?>
                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">Publish</a></td>
                <?php endif; ?>
                  
            </tr>

		<?php endforeach;  ?>
        

    



    </tbody>
</table>
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