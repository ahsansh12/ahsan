<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shoes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <?php
    require('functions.php');
    ?>
    <?php

    session_start();


    ?>
</head>

<body>
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1">
        <div class=" font-rale font-size-14">
            <a href="login.php" class="header-items px-3 border-right border-left text-dark">Login</a>
            <?php

            if (isset($_SESSION['username'])) {
                  echo "<h3>Welcome " . $_SESSION['username'] . "</h3>";} ?>
            <a href="logout.php">Logout</a>



    </div>

    </div>


    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-transpat">
        <a class="navbar-brand" href="index.php">
            <img src="assets/t.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php#top-sale">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#special-price">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#blogs">Blog</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
</header>
<main id="main-site">