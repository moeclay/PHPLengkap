<?php
require "conn/02_koneksi_pdo.php";

echo "<table style='border: solid 1px black; background-color: #ddd;'>";
echo "<tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
	function __construct($it){
		parent::__construct($it, self::LEAVES_ONLY);
	}

	function current(){
		return "<td style='width: 150px; border:1px solid black;'>".parent::current()."</td>";
	}

	function beginChildren(){
		echo "<tr>";
	}

	function endChildren(){
		echo "</tr>"."\n";
	}
}

try{
	// output 5 row
	// $stmt = $conn->prepare("SELECT id,firstname, lastname FROM myguests LIMIT 5");

	// limit with offset, lewati 4
	// $stmt = $conn->prepare("SELECT id,firstname, lastname FROM myguests LIMIT 5 OFFSET 2");

	// atau dg cara ini, dari 2 ambil 2 (4,5) karena 3 sudah kita hapus
	$stmt = $conn->prepare("SELECT id,firstname, lastname FROM myguests LIMIT 2,2");
	$stmt->execute();

	// set the resulting array to associative
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v){
		echo $v;
	}

}catch(PDOException $e){
	echo "Error : ".$e->getMessage();
}

$conn = null;
echo "</table>";