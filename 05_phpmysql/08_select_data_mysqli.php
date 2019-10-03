<?php
require "conn/01_koneksi_mysqli.php";

$sql = "SELECT id,firstname,lastname FROM myguests";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table border='1'><tr><th>ID</th><th>Nama Lengkap</th></tr>";

	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row['id']."</td><td>".$row['firstname']." ".$row['lastname']."</td><tr>";
	}
	
	echo "</table>";
}else{
	echo "0 result";
}

$conn->close();