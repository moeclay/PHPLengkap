<?php
require "conn/01_koneksi_mysqli.php";

/**
Prepare statement adalah fitur yang digunakan untuk menjalankan pernyataan SQL yang sama (atau serupa) berulang kali dengan efisiensi tinggi.

dg argument :
-------------
i : integer
d : double
s : string
b : BLOB

*/

// prepare and bind
$stmt = $conn->prepare("INSERT INTO myguests(firstname,lastname,email) VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameter and execute
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

echo "Berhasil membuat efisiensi command statement sql";
$stmt->close();
$conn->close();