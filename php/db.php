<?php
$servername='db';
$username='team11';
$password='j62JL!C4)WrPn3Zp';
$dbname='team11';
//creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);
//test connection
if($conn->connect_error){
 die("connection failed:" . $conn->connect_error);

}
?>