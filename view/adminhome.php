<?php
require('admin_header.php');
session_start();
if (empty($_SESSION["username"])) {
  header("Location: login.php");
}
?>


<!DOCTYPE html>
<html>

<head>

</head>

<body class="body">
  <center>
    <h2 id="container">ADMIN HOME PAGE</h2>
  </center>
  <h3>
    <p id="container">Hello! <?php echo $_SESSION["username"] . "!"; ?></p>
  </h3>

  <br />
  <h5>
    <p id="container">Please select one page you want to go
  </h5>
  </p>

  <p>
  <div id="container">
    <p><a href="allcategories.php">All Categories</a></p>
    <p><a href="addcategory.php">Add Category</a></p>
    <p><a href="alluserinfo.php">All User</a></p>

  </div>
  </p>

  <h5>
    <p id="container">Do you want to <a href="../controllers/logout.php">logout</a></p>
  </h5>
  <br />


</body>

</html>