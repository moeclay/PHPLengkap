<?php
require "conn/02_koneksi_pdo.php";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

try{
	$conn->exec($sql);
	echo "Data berhasil diinsert";

	$conn = null;
}catch(PDOException $e){
	echo $e->getMessage();
}