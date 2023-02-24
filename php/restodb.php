<?php
$servername="db";
$username="resto";
$password="KHdkWDk0VSpZWRX0";
$dbname="resto";
// creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

// check the connection
if ($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}
?>