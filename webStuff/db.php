<?php 

$dbServername="localhost";
$dbUsername = "pawpathw_admin";
$dbPassword= "Forgotit25!";
$dbName = "pawpathw_lostdogs";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(mysqli_connect_errno()){
    die("Database connection failed: " . mysqli_connect_error());
}

?>