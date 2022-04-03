<?php
include("path.php");

?>
<?php include($ROOT_PATH."/app/controllers/users.php");
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

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Register</title>
</head>
 
<body> 

<?php include($ROOT_PATH."/app/includes/header.php");?>
    <div class="auth-content">
        <form action="register.php" name="form1" method="post" onsubmit="return ValidateEmail(document.form1.email)">
            <h2 class="form-title">Register</h2>
            
            <?php include($ROOT_PATH."/app/helpers/formErrors.php");?>

            <div>
                <label>Username</label>
                <input type="text" name="username" value ='<?php echo $username;?>' class="text-input">
            </div>

            <div>
                <label>Email</label>
                <input type="text" name="email" value ='<?php echo $email;?>' class="text-input">
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
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p>Or <a href="<?php echo $BASE_URL .'login.php'  ?>">Sign In</a></p>

        </form>
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
    <!-- JQuery -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/slick-1.8.1/slick/slick.min.js"></script>
<script src="assets/js/scripts.js"></script>




</body>

</html>