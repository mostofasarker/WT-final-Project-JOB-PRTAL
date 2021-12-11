<?php
require_once 'main_header.php';
include('../controllers/logincheck.php');

if (isset($_SESSION['username'])) {
  if ($type == "admin") {
    header("location: adminhome.php");
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="../js/login.js"></script>
</head>

<head>
</head>

<body class="body">
  <h1 id="container">Welcome To Job Portal</h1>
  <h2 id="container">LOGIN</h2>
  <form name="myForm" action="" method="post" id="container">
    <p><input id="username" type="text" name="username" placeholder="Enter your username"></p>
    <p><input id="password" type="password" name="password" placeholder="Enter your password"></p>
    <p><label id="usernameErr"></label></p>
    <p><label id="passwordErr"></label></p>
    <fieldset>
      <legend align="middle">Login Type</legend>
      </tr>
      <center>
        <input type="radio" id="admin" name="type" value="admin">
        <label for="admin">Admin</label>
      </center>
    </fieldset>
    <p><input id="login" name="login" class="btn submit" type="submit" value="LOGIN"></p>
    <p><label id="typeErr"></label></p>

  </form>
  <br>
  <h3 id="container">Don't you have an account?</h3>
  <p id="container"><a href="RegistrationForm.php">REGISTRATION</a></p>



  <br>
  <?php echo $error; ?>

</body>

</html>