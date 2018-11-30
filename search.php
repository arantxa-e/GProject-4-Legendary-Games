<?php include('header.php'); ?>

<?php include('config.php'); ?>


<div class="main">
<?php

// when user clicks the searchBtn
 if (isset($_POST["searchbtn"])) {
    $keyword = $_POST['keyword'];
    $sql = "SELECT * FROM search WHERE name LIKE '%$keyword%'";
    $query = mysqli_query($connection, $sql);

//check results more than one
  if (mysqli_num_rows($query) == 1)  {
    $row = mysqli_fetch_row($query); ?>

       <h1>Search: '<?php echo $_POST['keyword']; ?>'</h1>
       <div class="search-container">
       <a href="index.php"><img src="<?php echo $row[1]; ?>"></a>
       <h2><?php echo $row[0]; ?></h2>
       <p><?php echo $row[2]; ?></p>

       <?php

 } else { ?>

      <h1>Search: '<?php echo $_POST['keyword']; ?>'</h1>
      <div class="search-container">
      <p>Sorry, no results were found.</p>

<?php
      }
 }

 ?>
 </div>
</div>
<?php include('footer.php'); ?>
