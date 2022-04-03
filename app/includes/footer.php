<div class="footer">
	<div class="footer-content">
		<div class="footer-section about">
			<h1 class="logo-text">Galle<span>Cinema</span></h1>
			<p>
			Galle cinames Ltd. is the market leader in terms of screen count in Galle. Since 1997, the brand has redefined the cinema industry and the way people watch movies in the country. The Company has, over the years, consistently added screens</p>
			<div class="contact">
				<span><i class="fas fa-phone"> &nbsp; +94 777 625 824 </i></span>
				<span><i class="fas fa-envelope"> &nbsp; info@gllcinemas.com </i></span>
			</div>
			<div class="socials">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
		<div class="footer-section links">
			<h2>Quick Links</h2>
			<br>
			<ul>
				<a href="#">
					<li>Home</li>
				</a>
				<a href="#">
					<li>Search for Movies</li>
				</a>
				<a href="#">
					<li>About Us</li>
				</a>
			</ul>
		</div>
		<div class="footer-section Contact-form">
			<h2>Contact Us</h2>
			<br>
			<form name="form1" action="index.php" method="post" onsubmit="return ValidateEmail(document.form1.email)">
				<input type="text" name="email" class="text-input contact-input" placeholder="Your email address....">
				<textarea name="Message" class="text-input contact-input" placeholder="Your message...."></textarea>
				<button type="submit" name="send" class="btn btn-big contact-btn">
					<i class="fas fa-envelope"></i>
					Send
				</button>
			</form>
			<?php
			if (isset($_POST['send'])) {
				echo '<script>alert("Message Sent...!")</script>';
			} ?>
		</div>
	</div>
	<script>
		function ValidateEmail(inputText) {
			var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			if (inputText.value.match(mailformat)) {
				return true;
			} else {
				alert("You have entered an invalid email address!");
				document.form1.email.focus();
				return false;
			}
		}
	</script>
</div>