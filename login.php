<?php include('header.php'); ?>


  <div class="main">
    <h1>Login</h1>
    <p>Don't have an account? <a href="#">Click here</a> to register!</p>

    <form name="input" action="" method="post">
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


<?php include('footer.php'); ?>
