<?php
require('admin_header.php');
include('../controllers/db.php');
session_start();
include("../model/setconn.php");
if (empty($_SESSION["username"])) {
  header("Location: login.php");
}
if (isset($_GET["uname"])) {

  $sql = "update users set deleted_by='" . $_SESSION['username'] . "' where username='" . $_GET['uname'] . "' ";
  //echo $sql;
  execute($sql);
  header("location:alluserinfo.php");
}
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body class="body">
  <h2 id="container">All User Information Page</h2>

  <h3 id="container">Hii, <?php echo $_SESSION["username"]; ?></h3>
  <br />All user information:
  <?php
  $sql = "select * FROM users where deleted_by is  NULL and type!='admin'  ";
  //echo $sql;
  $userQuery = execute($sql);

  $connection = new db();
  $conobj = $connection->OpenCon();

  $userQuery = $connection->ShowAll($conobj, "users");

  ?>


  <div class="profile-container">

    <?php
    if ($userQuery->num_rows > 0) {
      while ($row = $userQuery->fetch_assoc()) {
    ?>

        <div class="profile-wrapper" id="container">
          <table>
            <tr>
              <td>Name:</td>
              <td><?php echo $row["firstname"]; ?></td>
            </tr>

            <tr>
              <td>Email:</td>
              <td style="width: 100px; word-wrap: wrap;"><?php echo $row["email"]; ?></td>
            </tr>

            <tr>
              <td>UserName:</td>
              <td><?php echo $row["username"]; ?></td>
            </tr>

            <tr>
              <td>Address:</td>
              <td><?php echo $row["address"]; ?></td>
            </tr>

            <tr>
              <td>PhoneNo:</td>
              <td><?php echo $row["phoneno"]; ?></td>
            </tr>

            <tr>
              <td>Gender:</td>
              <td><?php echo $row["gender"]; ?></td>
            </tr>

            <tr>
              <td>Type:</td>
              <td><?php echo $row["type"]; ?></td>
            </tr>

            <tr>
              <td>DOB:</td>
              <td><?php echo $row["dob"]; ?></td>
            </tr>
          </table>
        </div>

    <?php }
      echo "</table>";
    } else {
      echo "0 results";
    }
    ?>

  </div>

  <br />
  <br />
  <br />

</body>

</html>