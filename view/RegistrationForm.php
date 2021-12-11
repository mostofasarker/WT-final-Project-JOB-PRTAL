<?php
session_start();
require_once 'main_header.php';
?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="../js/regi.js"></script>
</head>

<body class="body">
  <fieldset id="container">
    <legend align="left"><b> REGISTRATION</b></legend>
    <br>
    <form method="post" action="../controllers/regi.php">
      <tr>
        <fieldset>
          <td><label for="firstname">Name:</label></td>
          <td><input type="text" id="firstname" name="firstname"><br></td>
      </tr>
      <br>
      <hr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="text" id="email" name="email"></td>
      </tr>
      <br>
      <hr>
      <tr>
        <td><label for="uname">User Name:</label></td>
        <td><input type="text" id="username" name="username"></td>
      </tr>
      <br>
      <hr>
      <tr>
        <td><label for="passwor">Password:</label></td>
        <td><input type="password" id="password" name="password"></td>
      </tr>
      <br>
      <hr>
      <tr>
        <td><label for="cpass">Confirm Password:</label></td>
        <td><input type="password" id="cpassword" name="cpassword"></td><?php if (isset($_SESSION["wrong"])) {
                                                                          echo $_SESSION["wrong"];
                                                                          unset($_SESSION["wrong"]);
                                                                        } ?>
      </tr>
      <br>
      <hr>
      <tr>
        <fieldset>
          <td><label for="address">Address:</label></td>
          <td><input type="text" id="address" name="address"></td>
        </fieldset>
        <hr>
        <fieldset>
          <td><label for="phoneno">Phone number:</label></td>
          <td><input type="text" id="phoneno" name="phoneno"></td>
        </fieldset>
        <hr>
      </tr>
      <fieldset>
        <legend align="left">Gender</legend>

        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </fieldset>
      <hr>

      <fieldset>
        <legend align="left">Type of user</legend>
        </tr>
        <input type="radio" id="admin" name="type" value="admin">
        <label for="admin">Admin</label>
      </fieldset>
      <hr>

      <fieldset>
        <legend align="left">Date of Birth</legend>
        <input type="date" id="dob" name="dob"><label for="Name"></label>
      </fieldset>
      <hr>
      <fieldset>
        <p><label id="err"></label></p>
        <br>
        <input class="btn delete" type="Reset">
        <input class="btn submit" type="submit">
      </fieldset>
    </form>
  </fieldset>
</body>

</html>