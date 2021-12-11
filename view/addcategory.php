<?php

session_start();
if (empty($_SESSION["username"])) {
    header("Location: login.php");
}

?>
<?php include 'admin_header.php';
include '../controllers/admincontroller.php';
?>

<body class="body">
    <div id="container">
        <h5><?php echo $err_db; ?></h5>
        <form action="" method="post" name="addcategoryForm" onsubmit="return isvalid()">

            <h4>Name:</h4>
            <input type="text" name="name">
            <span id="catnameErr" style="color : red;"><?php echo $catnameErr; ?></span>
            <br>
            <br>
            <input type="submit" name="add_category" class="btn submit" value="Add Category" class="form-control">

        </form>
    </div>
</body>