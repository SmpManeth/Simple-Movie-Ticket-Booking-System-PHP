<header>

<a href="<?php echo $BASE_URL .'index.php'  ?>" class="logo">
<h1 class="logo-text">Galle<span>Cinema</span></h1>
</a>
<i class="fa fa-bars menu-toggle"></i>
<ul class="nav">
<?php if(isset($_SESSION['id'])): ?>

<li>
    <a href="#">
        <i class="fas fa-user"></i>
        <?php echo $_SESSION['username'];?><!-- user name-->
        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
    </a>

        <ul>
            <li><a href="<?php echo $BASE_URL.'logout.php'?>" class="logout">Logout</a></li>
        </ul>
    </li>
    <?php endif; ?>
</ul>
</header>