<?php
require "conn/02_koneksi_pdo.php";

try{
	$stmt = $conn->prepare("INSERT INTO myguests(firstname,lastname,email) VALUES (:firstname, :lastname, :email)");
	$stmt->bindParam(':firstname', $firstname);
	$stmt->bindParam(':lastname', $lastname);
	$stmt->bindParam(':email', $email);

	// insert a row
	$firstname = "John7";
    $lastname = "Doe";
    $email = "john7@example.com";
    $stmt->execute();

    $firstname = "John8";
    $lastname = "Doe";
    $email = "john8@example.com";
    $stmt->execute();

    $firstname = "John9";
    $lastname = "Doe";
    $email = "john9@example.com";
    $stmt->execute();

    echo "PDO::Prepare. New record created successfully";

	$conn = null;
}catch(PDOException $e){
	
	echo $e->getMessage();
}