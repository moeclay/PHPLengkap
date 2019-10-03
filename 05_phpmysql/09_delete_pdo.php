<?php
require "conn/02_koneksi_pdo.php";

try{
	$sql = "DELETE FROM myguests WHERE id=3";
	$conn->exec($sql);
	echo "Record delete berhasil !";
}catch(PDOException $e){
	echo "Error : ".$e->getMessage();
}

$conn = null;