<?php
$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "pdo_dasar";

try {
	$conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
	// set the pdo error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// tes apakah berhasil terkoneksi
	// echo "PDO :: Connection successully";

	// tutup koneksi
	// $conn = null;
}catch(PDOException $e){
	echo "Connection failed : ".$e->getMessage();
}