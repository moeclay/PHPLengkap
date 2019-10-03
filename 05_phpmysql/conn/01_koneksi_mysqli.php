<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname   = "mysqli_dasar"; 

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection faild : ".$conn->connect_error);
}

// tes apakah terkoneksi
// echo "MySQLi Connection successfully";

// close procedural
// $conn->close();
