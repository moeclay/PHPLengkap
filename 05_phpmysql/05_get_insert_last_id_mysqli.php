<?php
require "conn/01_koneksi_mysqli.php";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John2', 'Doe', 'john2@example.com')";

if($conn->query($sql) === TRUE){
	$last_id = $conn->insert_id;
	echo "Data berhasil diinsert, dg id : ".$last_id;
}else{
	echo "Error membuat table".$conn->error;
}


$conn->close();