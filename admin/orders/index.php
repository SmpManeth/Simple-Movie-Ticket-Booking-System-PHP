<?php include("../../path.php");?>
<?php include($ROOT_PATH."/app/controllers/posts.php");
$posts = selectAll('tickets',[`published`=>1]);?>

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


<div class="content">
<h2 class="page-title">View Orders</h2>
<?php include($ROOT_PATH."/app/includes/messages.php");?>
<table>
    <thead>
        <th>Order NO</th>
        <th>Show Time</th>
        <th>Quantity</th>
        <th>Theater</th>
        <th>Movie NAme</th>
        
      
    </thead>

    <tbody>
    <!--fetching post dertails-->
        <?php  foreach ($posts as $key => $post): ?>
				
            <tr>
                <td><?php echo $key +1 ; ?></td>
                <td><?php echo $post['show_time'] ; ?></td>
                <td><?php echo $post['quantity'] ; ?></td>
                <td><?php echo $post['theater'] ; ?></td>
                <td><?php echo $post['movie_id'] ; ?></td>
               
                

              
                  
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