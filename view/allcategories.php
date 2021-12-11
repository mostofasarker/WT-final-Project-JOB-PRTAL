<?php
session_start();
if (empty($_SESSION["username"])) {
    header("Location: login.php");
}

?>
<?php include 'admin_header.php';
include '../controllers/admincontroller.php';
$categories = getAllCategories();

?>
<!--All Categories starts -->

<body class="body">
    <div id="container">
        <h3>All Categories</h3>
        <table>
            <thead>
                <th>Sl#</th>
                <th> Name</th>
            </thead>
            <tbody>
                <?php
                $i = 1;

                foreach ($categories as $c) {
                    $id = $c["id"];
                    echo "<form action='' method='post'>";
                    echo "<tr class='space'>";
                    echo "<td>$i</td>";
                    echo "<td>" . $c["name"] . "</td>";
                    echo "<input id='id' type='hidden' name='id' value= '$id'/>";
                    echo '<td><input type="submit" name="delete_category" class="btn delete" value="Delete"> </td> ';
                    echo "</tr> ";
                    echo "</form> ";
                    $i++;
                }
                ?>

            </tbody>
        </table>
    </div>
</body>