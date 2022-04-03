<?php include("../../path.php"); ?>
<?php include($ROOT_PATH . "/app/controllers/posts.php"); ?>
<?php include($ROOT_PATH . "/app/controllers/theater.php"); ?>
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
    <title>Admin Section - Add Movies</title>
</head>


<body>
    <?php include($ROOT_PATH . "/app/includes/adminHeader.php"); ?>


    <!-- admin page wrapper-->
    <div class="admin-wrapper">
        <!--left s;ide bar-->
        <?php include($ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <div class="admin-content">

            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Movies</a>
                <a href="index.php" class="btn btn-big">Manage Movies</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Movies</h2>
                <?php include($ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">Titile</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body; ?></textarea>
                    </div>

                    <div>
                        <label>image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    
                    <div>
                        <label for="">Price</label>
                        <input type="text" name="price" value="<?php echo $title; ?>" class="text-input">
                    </div>
                    <div>
                        <label for="theater">Theater</label>
                        <select class="text-input" name="theater" id="theater">
                            
                            <?php foreach ($topics as $key => $theater) : ?>
                                <option value="<?php echo $theater['Theater_name'] ?>"><?php echo $theater['Theater_name'] ?></option>
                            <?php endforeach;  ?>
                            
                            <?php ?>
                        </select>
                    </div>

                    <!--publish check box-->
                    <div>
                        <label><input type="checkbox" name="published">Publish</label>
                    </div>

                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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