<?php
$servername = "db";
$username = "team11";
$password = "team11";
$dbname = "team11";

// creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

//check the connection

if ($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}

?>