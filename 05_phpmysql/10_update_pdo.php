<?php
require "conn/02_koneksi_pdo.php";

try{
	$sql = "UPDATE myguests SET lastname='Clay2' WHERE id=2";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	echo $stmt->rowCount()." records update successfully";
}catch(PDOException $e){
	echo "Error : ".$e->getMessage();
}

$conn = null;