<!-- header -->
<?php
session_start();
$_SESSION["username"] = "admin";
$_SESSION["password"] = "adminara"
?>
<header>
    <div class="logo">
        <a href="../index.php"><img src="/assets/img/logo fmdh.png" alt="find my dream home logo"></a>
        
    </div>

    <div class="navbar">
        <a href="#sales">
            <h4>Sales</h4>
        </a>
        <a href="#rentals">
            <h4>Rentals</h4>
        </a>
        <a href="https://www.google.com" target="_blank">
            <h4>Houses</h4>
        </a>
        <a href="https://www.google.com" target="_blank">
            <h4>Appartment</h4>
        </a>
    </div>
    <div class="nav-button-and-fav">
    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==true): ?>

        <a class="fav" href="/Listings/favourites.php">
            <div class="fav-heart"><img src="/assets/img/icons/heart.png" alt="favourites"></div>
        </a> <?php endif ?>
        <a class="buttona" href="/index.php" target="_blank">Contact us</a>

        <?php
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==true) {
            echo '<a class="buttona" href="../Listings/new.php">Add</a>';
        }
        ?>
        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==true): ?>
            <a class="buttona" href="/security/logout.php">Logout</a>
        <?php else: ?>
            <a class="buttona" href="/security/login.php">Login</a>
        <?php endif; ?>
        
        
        




    </div>
</header>


<!-- Banner -->
<div class="banner"></div>