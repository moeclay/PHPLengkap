<?php
require "conn/02_koneksi_pdo.php";

$sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

try{
	$conn->exec($sql);
	echo "Table myguests berhasil dibuat !";

	$conn = null;
}catch(PDOException $e){
	echo $e->getMessage();
}