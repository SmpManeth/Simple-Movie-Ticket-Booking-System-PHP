<?php include("../../path.php"); 

include($ROOT_PATH . "/app/controllers/posts.php");
include($ROOT_PATH . "/app/controllers/theater.php"); ?>
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
    <title>Admin Section - Manage Theaters</title>
</head>


<body>
    <?php include($ROOT_PATH . "/app/includes/adminHeader.php"); ?>


    <!-- admin page wrapper-->
    <div class="admin-wrapper">
        <!--left s;ide bar-->
        <?php include($ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <div class="admin-content">

            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Theaters</a>
                <a href="index.php" class="btn btn-big">Manage Theaters</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Theaters</h2>
                <?php include($ROOT_PATH . "/app/includes/messages.php"); ?>
                <table>
                    <thead>
                        <th>TN</th>
                        <th>Theater Name</th>
                        <th>Theater Location</th>


                        <th colspan="2">Action</th>
                    </thead>

                    <tbody>
                        <!--checking whether user is a admin or a user-->
                        <?php foreach ($topics as $key => $user) : ?>
                            
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $user['Theater_name']; ?></td>
                                <td><?php echo $user['Theater_Location']; ?></td>
                                
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