<?php
$conn = new mysqli("localhost", "root", "", "jobportal");


function execute($sql)
{
    global $conn;
    $res = $conn->query($sql);
    return $res;
}
