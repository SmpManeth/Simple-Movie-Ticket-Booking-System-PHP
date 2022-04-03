<?php
include("path.php");
include($ROOT_PATH . "/app/controllers/topic.php");

$posts = array();
$postsTitle = 'NOW SHOWING';
$table = 'posts';
$postss = selectAllusers('posts', ['published' => 1]);
$posts = selectAll($table, [`published` => 1]);

if (isset($_POST['search-term'])) {
	$postsTitle = "Search Results '" . $_POST['search-term'] . "'";
	$search = $_POST['search-term'];
	//$posts=getPublishedPosts($search);
	$sql = "SELECT `posts`.*, `users`.`username`FROM `posts`, `users` WHERE `posts`.`title` LIKE '%$search%' OR `posts`.`body` LIKE '%$search%' ";
	$posts = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($posts);
} else {
	$postss = selectAllusers('posts', ['published' => 1]);
	$posts = selectAll($table, [`published` => 1]);
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
	<!-- Font Awesome -->

	<link rel="stylesheet" href="assets/css/all.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

	<!-- Custom Styling -->
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Galle Cinemas</title>
</head>


<body>

	<?php include($ROOT_PATH . "/app/includes/header.php"); ?>
	<?php include($ROOT_PATH . "/app/includes/messages.php"); ?>



	<!--page wrapper-->
	<div class="site">
		<div class="page-wrapper">

			<!--postslider-->
			<h1 class="slider-title"></h1>
			<div class="post-slider">
				<i class="fas fa-chevron-left prev"></i>
				<i class="fas fa-chevron-right next"></i>

				<div class="post-wrapper">


					<h1 class="recent-post-title"><?php echo "Latest Movies" ?></h1>
					<?php foreach ($posts as $post) : ?>
						<div class="post">
							<img src="<?php echo $BASE_URL . 'assets/images/post_images/' . $post['image']; ?>" alt="" class="slider-image">
							<div class="post-info">
								<h4><a href="single.php?sid=<?php echo $post['id']; ?>"><?php echo html_entity_decode(substr($post['title'], 0, 37) . '...'); ?></a></h4>

								&nbsp;

								<i class="far fa-calendar-alt"><?php echo date('F j,Y', strtotime($post['created_at'])); ?></i>
							</div>
						</div>
					<?php endforeach; ?>
					<!--page posts-->


				</div>
			</div>

			<!--content-->
			<div class="content clearfix" style="height: 350px;">

				<!--main content-->
				<div class="main-content">
					<h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

					<?php foreach ($posts as $post) : ?>

						<a href="single.php?sid=<?php echo $post['id']; ?>">
						
							<img style="border: 5px solid black;z-index: 9999; width:200px; border-radius: 7%; height: 200px; padding: 1%; margin: 1.5%;" src="<?php echo $BASE_URL . 'assets/images/post_images/' . $post['image']; ?>" alt="" class="post-image">
						</a>

					<?php endforeach; ?>


				</div>
				<div>
		
				<div class="main-content">
					
<img class="finalimg" src="assets/images/Vfg7vBL1EALm6S3710q61PUsId80zewb.jpg" alt="">
				</div>
				<!--//main content-->
			</div>

			<!--//content-->

		</div>
	</div>


	<!--Page footer-->
	<div class="credits" style="width: 100%; overflow:hidden;
clear: both">
		<?php include($ROOT_PATH . "/app/includes/footer.php"); ?>
	</div>



	<!-- JQuery -->
	<script>
		function myFunction() {
			alert("Item Added to the Cart");
		}
	</script>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/slick-1.8.1/slick/slick.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/actions.js"></script>


</body>

</html>