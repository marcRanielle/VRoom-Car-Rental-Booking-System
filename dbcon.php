<?php

$host = 'localhost'; 
$dbname = 'techno in-store ordering website system';  
$username = 'root';  
$password = '';  

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
