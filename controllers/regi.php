<?php
session_start();
$values = true;
$firstname = $email = $username = $password = $cpassword = $address = $phoneno = $gender = $type = $dob = "";
$passworderror =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $address = $_POST["address"];
    $phoneno = $_POST["phoneno"];
    $gender = $_POST["gender"];
    $type = $_POST["type"];
    $dob = $_POST["dob"];
    if ($password != $cpassword) {
        $values = false;
        $passworderror = "Password mismatch";
        $_SESSION["wrong"] = "wrong password";
        header("location: ../view/RegistrationForm.php");
    } else {
        $conn = new mysqli("localhost", "root", "", "jobportal");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO Users (firstname,email,username,password,address,phoneno,gender,type,dob)
        VALUES ('$firstname','$email','$username','$password','$address','$phoneno','$gender','$type','$dob')";
        echo $sql;
        $res = $conn->query($sql);
        if ($res) {
            echo "Registration Successful!";
        } else {
            echo "Try Again";
        }
        $conn->close();
        header("location: ../view/login.php");
    }
}
