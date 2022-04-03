<?php
include("path.php");
include($ROOT_PATH . "/app/controllers/tickets.php");
include("code.php");
$pid = 0;
$uid = 0;
$qnt = 0;

if (isset($_GET['sid'])) {
    $post = selectOne('posts', ['id' => $_GET['sid']]);
}
$price = '';
$posts = selectAll('posts', null);

$topics = selectAll('show_time', null);



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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">


    <title> <?php echo $post['title']; ?> | Galle Cinemas </title>
</head>

<body>

    <?php include($ROOT_PATH . "/app/includes/header.php"); ?>

    <!--page wrapper-->
    <div class="page-wrapper">

        <!--content-->
        <div class="content clearfix">
            <!--main content-->
            <div class="main-content single">
                <form method="post" action="single.php?sid=<?php echo $post["id"]; ?>">
                    <?php $pid = $post["id"];
                    ?>

                    <div class="post-content">
                        <p>
                            <?php echo html_entity_decode($post['body']); ?>
                        </p>
                    </div>
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>
                    <img src="<?php echo $BASE_URL . 'assets/images/post_images/' . $post['image']; ?>" alt="" class="slider-image" style="width: 30%; height: 280px;">



                    <input type="hidden" name="id" value="<?php echo $post["title"]; ?>">
                    <input type="hidden" name="theater" value="<?php echo $post["theater"]; ?>">
                    <input type="hidden" name="price" value="<?php echo $post["price"]; ?>">
                    <div class="singlebuy">
                        <!--Fetching topics to the drop down-->
                        <h5>Show Times</h5>

                        <select name="show_time" class="text-input" required>
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic) : ?>
                                <option value="<?php echo $topic['Show_Time'] ?>"><?php echo $topic['Show_Time'] ?></option>
                            <?php endforeach;  ?>
                        </select>
                        <br>
                        <h5 id="price">Price -Rs.<?php echo $post["price"]; ?></h5><br>
                        <h5 id="price">Theater: <?php echo $post["theater"]; ?></h5><br>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" id="" required><br><br>

                        <button type="submit" name="buy-ticket" class="btn btn-big">Buy Ticket</button>

                    </div>

                </form>


            </div>
        </div>
    </div>


    </div>

    <!--Page footer-->
    <?php include($ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- JQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/slick-1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/scripts.js"></script>



</body>

</html>