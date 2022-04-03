<header>
    
<?php



?>
    <a href="<?php echo $BASE_URL . 'index.php'  ?>" class="logo">
        <h1 class="logo-text">Galle<span>Cinema</span></h1>
    </a>

    <i class="fas fa-bars menu-toggle"></i>

    <ul class="nav">

        <li class="section search" style="margin-top: 7.5px; right: 7%; width: 270px;">

            <form action="index.php" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search Movie Name">
            </form>

        </li>


        <li><a href="<?php echo $BASE_URL . 'index.php'  ?>">Home</a></li>
       


        <?php if (isset($_SESSION['id'])) : ?>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <!-- user name-->
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
               

                <ul>
                    <?php if ($_SESSION['admin']) : ?>
                        <li><a href="<?php echo $BASE_URL . 'admin/dashboard/dashboard.php' ?>">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo $BASE_URL . 'logout.php' ?>" class="logout">Logout</a></li>
                </ul>
            </li>

            

        <?php else : ?>
           

            <li><a href="<?php echo $BASE_URL . 'register.php' ?>">Sign Up</a></li>
            <li><a href="<?php echo $BASE_URL . 'login.php' ?>">Login</a></li>

        <?php endif; ?>






    </ul>

</header>