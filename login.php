<?php include('header.php'); ?>

<?php
  include('config.php');

?>

  <div class="main">
    <h1>Login</h1>

    <div class="status">
      <?php

      $count = 0;
        if($_SERVER["REQUEST_METHOD"] == "POST") {
           // username and password sent from form

           $myusername = mysqli_real_escape_string($connection,$_POST['username']);
           $mypassword = mysqli_real_escape_string($connection,sha1($_POST['password']));

           $sql = "SELECT * FROM legend WHERE username = '$myusername' and password = '$mypassword'";
           $result = mysqli_query($connection,$sql);

           $count = mysqli_num_rows($result);

           // If result matched $myusername and $mypassword, table row must be 1 row

           if($count == 1) {
             $_SESSION["login"] = true;
             $_SESSION["username"] = $_POST["username"];

             header( "refresh:2;url=index.php" );
           } else {
              echo 'Your Login Name or Password is invalid. Please try again.';
           }
        }

      ?>

      <?php if($count == 1) { ?>
        Congratulations! You've logged in. Please hold while we redirect you.
      <?php } ?>

    </div>

    <div class="loginbox clearfix">

      <img src="images/avatar.png" class="avatar">

    <p>Don't have an account? <a href="register.php">Click here</a> to register!</p>


    <form name="login" action="" method="post">
      <label for="username">Username:</label>
      <br />
      <input type="text" value="" id="username" name="username" />
      <br />
      <label for="password">Password:</label>
      <br />
      <input type="password" value="" id="password" name="password" /><br />
      <input type="submit" value="Login" name="submit" />
    </form>
  </div>
</div>


<?php include('footer.php'); ?>
