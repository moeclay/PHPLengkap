<?php
require "conn/01_koneksi_mysqli.php";

$sql = "UPDATE myguests SET lastname='Clay' WHERE id=2";
if($conn->query($sql) === TRUE){
	echo "Record update successfully !";
}else{
	echo "Recordgagal update !";
}

$conn->close();