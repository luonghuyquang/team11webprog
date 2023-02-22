<?php


/*$servername="d4cab9dc2e30";
$username="crudapp";
$password='password';
$dbname="team11_project";*/

// my local machine db

$servername = "db1";
$username = "root";
$password = "password";
$dbname = "team11_project";

//creating connection
$conn = new mysqli($servername, $username, $password,$dbname);
//test connection
if($conn->connect_error){
 die("connection failed:".$conn->connect_error);

}
?>