<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Legend Games</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome Icon Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">

  </head>
  <body>

    <div class="wrapper">

      <div class="header">

        <div class="topnav clearfix">
          <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
          </div>

          <nav>
            <ul>
              <li><a href="#"><i class="fas fa-question-circle"></i> Customer Service</a></li>
              <li><a href="#"><i class="fas fa-shopping-cart"></i> Shopping Cart</a></li>
              <?php if ( isset($_SESSION["login"])) { ?>
                <span class="hello">Hello, <?= $_SESSION["username"] ?>:</span>
                <li><a href="#"><i class="fas fa-star"></i> Wishlist</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
          </nav>
        </div>

        <div class="bottomnav">
          <ul>
            <li><a href="index.php">All Products</a></li>
            <li><a href="product.php">Featured Products</a></li>
          </ul>
          <div class="sidebar">
            <form action="search.php" method="post">
                <input type="text" id="searchBar" name="keyword" value="Search..." maxlength="25" />
                <input type="submit" name="searchbtn" id="searchBtn" value="Go!" />
            </form>
          </div>
        </div>

      </div>

      <div class="menu">
        <h3>Consoles</h3>
          <ul>
            <li><a href="#">Nintendo</a></li>
            <li><a href="#">Playstation</a></li>
            <li><a href="#">XBox</a></li>
            <li><a href="#">VR</a></li>
          </ul>

          <h3>PC</h3>
            <ul>
              <li><a href="#">Computer Games</a></li>
              <li><a href="#">Gaming Desktops</a></li>
              <li><a href="#">Gaming Laptops</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>

        <h3>Games</h3>
          <ul>
            <li><a href="#">Latest Releases</a></li>
            <li><a href="#">Action</a></li>
            <li><a href="#">Horror</a></li>
            <li><a href="#">Indie</a></li>
            <li><a href="#">All Games</a></li>
          </ul>

      </div>
