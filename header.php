<!DOCTYPE html>
<html>
  <head>
    <title>Legend Games</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">

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
            <img src="images/logo.png" alt="">
          </div>

          <nav>
            <ul>
              <li><a href="#"><i class="fas fa-star"></i> Wishlist</a></li>
              <li><a href="#"><i class="fas fa-question-circle"></i> Customer Service</a></li>
              <li><a href="#"><i class="fas fa-shopping-cart"></i> Shopping Cart</a></li>
              <li><a href="#">Register</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </nav>
        </div>

        <div class="bottomnav">
          <ul>
            <li><a href="#">All Products</a></li>
            <li><a href="#">Featured Products</a></li>
          </ul>
          <div class="sidebar">
            <form action="search.php" method="post">
                <input type="text" id="searchBar" placeholder="" value="Search..." maxlength="25" /><input type="submit" id="searchBtn" value="Go!" />
            </form>
          </div>
        </div>

      </div>
