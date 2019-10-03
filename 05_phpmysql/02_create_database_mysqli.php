<?php
require "conn/01_koneksi_mysqli.php";

$sql = "CREATE DATABASE myDB2";
if($conn->query($sql) === TRUE){
	echo "Database created successfully";
}else{
	echo "Error craeting database : ".$conn->error;
}

$conn->close();