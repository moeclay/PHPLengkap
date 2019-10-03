<?php
require "conn/02_koneksi_pdo.php";

try{
	// begin the transaction
	$conn->beginTransaction();

	// our SQL statement
	$conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')");

    // commit the transaction
    $conn->commit();
    echo "New record created successfully";

	$conn = null;
}catch(PDOException $e){
	// roll back the transaction if something failed
	$conn->rollback();
	
	echo $e->getMessage();
}