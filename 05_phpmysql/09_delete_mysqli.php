<?php
require "conn/01_koneksi_mysqli.php";

$sql = "DELETE FROM myguests WHERE id=3";

if($conn->query($sql) === TRUE){
	echo "Record berhasil dihapus";
}else{
	echo "Record gagal dihapus !";
}

$conn->close();