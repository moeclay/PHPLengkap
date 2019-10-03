<?php
require "conn/01_koneksi_mysqli.php";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";


if($conn->query($sql) === TRUE){
	echo "Data berhasil diinsert !";
}else{
	echo "Error membuat table".$conn->error;
}


$conn->close();