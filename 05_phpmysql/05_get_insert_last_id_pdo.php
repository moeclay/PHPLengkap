<?php
require "conn/02_koneksi_pdo.php";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John2', 'Doe', 'john2@example.com')";

try{
	$conn->exec($sql);
	$last_id = $conn->lastInsertId();
	echo "Data berhasil diinsert, dg id : ".$last_id;

	$conn = null;
}catch(PDOException $e){
	echo $e->getMessage();
}