<?php
require "conn/02_koneksi_pdo.php";

try {
	$sql = "CREATE DATABASE mydbpdo2";
	$conn->exec($sql);

	echo "Database pdo berhasil dibuat";
	$conn = null;
}catch(PDOException $e){
	echo $e->getMessage();
}
