<?php
$db_server = "localhost";
$db_uname = "root";
$db_pass = "";
$db_name = "jobportal";



function execute($query)
{
    global $db_server, $db_uname, $db_pass, $db_name;
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    if ($conn) {
        if (mysqli_query($conn, $query)) {
            return true;
        } else {
            return mysqli_error($conn);
        }
    }
}

function get($query)
{
    global $db_server, $db_uname, $db_pass, $db_name;
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    $data = array();
    if ($conn) {
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}

$err_db = "";
$catnameErr = "";
$check = false;

if (isset($_POST["add_category"])) {
    if (empty($_POST["name"])) {
        $catnameErr = "* Category Must Be Field";
        $check = true;
    }

    if (!$check) {
        $rs = insertCategory($_POST["name"]);
        if ($rs === true) {
            header("Location: allcategories.php");
        }
        $err_db = $rs;
    }
} else if (isset($_POST["delete_category"])) {

    $rs = delete_category($_POST["id"]);
    if ($rs === true) {
        header("Location: allcategories.php");
    }
    $err_db = $rs;
}

function insertCategory($name)
{
    $query = "insert into jobcategory values (NULL,'$name')";
    return execute($query);
}

function getAllCategories()
{
    $query = "select * from jobcategory";
    $rs = get($query);
    return $rs;
}


function delete_category($id)
{
    $query = "delete from jobcategory where id = $id";
    return execute($query);
}
