<?php
$servername='db';
$username='team11';
$password='j62JL!C4)WrPn3Zp';
$dbname='team11';
//creating connection
$conn =mysqli_connect($servername, $username, $password,$dbname);
//test connection
if($conn->connect_error){
 die("connection failed:".$conn->connect_error);

// check the connection
if ($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}
?>