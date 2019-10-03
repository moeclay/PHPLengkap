<?php
require "conn/01_koneksi_mysqli.php";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Annie', 'S', 'annie@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";


if($conn->multi_query($sql) === TRUE){
	echo "Multi insert data berhasil";
}else{
	echo "Error membuat table".$conn->error;
}


$conn->close();