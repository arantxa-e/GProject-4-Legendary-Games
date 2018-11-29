<?php include('header.php'); ?>

<?php
session_start();

include('config.php');

?>


<div class="main">

    <h1>Register</h1>

    <div class="status">
      <?php

      if(isset($_POST["submit"])) {

        $state = $_REQUEST["state"];
        $zip = $_REQUEST["zip"];
        $street = $_REQUEST["address"];
        $phone = $_REQUEST["phone"];
        $success = "";
        $validUser = 0;

        if((!empty($_REQUEST["state"])) && (!empty($_REQUEST["phone"])) && (!empty($_REQUEST["address"])) &&
        (!empty($_REQUEST["zip"])) && (!empty($_REQUEST["username"])) && (!empty($_REQUEST["password"]))
        && (!empty($_REQUEST["email"])) && (!empty($_REQUEST["city"]))) {
          if ((!preg_match("/[A-Z]{2}/", $state)) || (!preg_match("/^[0-9]/", $street))
          || (!preg_match("/[a-zA-Z]$/", $street)) || (!preg_match("/[0-9]{10}/", $phone)) ||
          (!preg_match("/[0-9]{5}/", $zip))) {
            echo '<div class="error">Please fix the errors to proceed. </div>';
            $validUser = 0;
          } else {
          $validUser = 1;
        }
        }

        if(!empty($_REQUEST["zip"])) {
          if (!preg_match("/[0-9]{5}/", $zip)) {
            echo 'Zip code must contain only five numbers. ';
          }
        } else {
          echo 'Please enter a zip code. ';
        }

        if(!empty($_REQUEST["phone"])) {
          if (!preg_match("/[0-9]{10}/", $phone)) {
            echo 'Please enter a 10 digit phone number. ';
          }
            preg_replace('/\D/', '', $phone);
          } else {
            echo 'Please enter a phone number. ';
          }

        if(!empty($_REQUEST["address"])) {
          if ((!preg_match("/^[0-9]/", $street)) || (!preg_match("/[a-zA-Z]$/", $street))) {
            echo 'Please enter a valid street beginning with a number and ending with a letter. ';
          }
        } else {
          echo 'Please enter a street. ';
        }

        if(!empty($_REQUEST["state"])) {
          if (!preg_match("/[A-Z]{2}/", $state)) {
          echo 'State must use two capital letters. ';
        }
        } else {
          echo 'Please enter a state. ';
        }

        if((empty($_REQUEST["username"])) || (empty($_REQUEST["password"]))) {
          echo 'Please make sure you have filled out both username and password. ';
        }
        if (empty($_REQUEST["email"])) {
          echo 'Please enter an email. ';
        }
        if (empty($_REQUEST["city"])) {
          echo 'Please enter a city. ';
        }

        if ($validUser == 1) {

          $user = $_REQUEST["username"];
          $pass = sha1($_REQUEST["password"]);
          $email = $_REQUEST["email"];

          $sql = "INSERT INTO legend (id, username, password, email) VALUES (NULL, '$user' , '$pass' , '$email')"; //Inserts data into the db, users2 table. Values correspond to fields

          mysqli_query($connection, $sql); //(connection variable, query variable)
          mysqli_close($connection);

          echo 'Account creation successful. ';
        }

        if ($validUser == 0) {
          echo 'Unsuccessful. ';
        }

      }
      ?>

    </div>


    <form name="input" action="" method="POST">

    <p>Have an account already? Click here to <a href="login.php">sign in</a>!</p>

    <label for="username">Username</label><br>
    <input type="text" name="username" placeholder="Enter Username"><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" placeholder="Enter E-mail"><br>

    <label for="phone">Phone Number</label><br>
    <input type="text" name="phone" placeholder="Enter Phone number"><br>

    <label for="address">Street</label><br>
    <input type="text" name="address" placeholder="Street"><br>

    <label for="city">City</label><br>
    <input type="text" name="city" placeholder="city"><br>

    <label for="zip">Zip Code</label><br>
    <input type="text" name="zip" size="5" maxlength="5" placeholder=""><br>

    <label for="state">State</label><br>
    <input type="text" name="state" size="2" maxlength="2" placeholder=""><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" placeholder="Enter Password"><br>


    <input type="submit" name="submit" value="Register"><br>

  </form>

</div>

<?php include('footer.php'); ?>
