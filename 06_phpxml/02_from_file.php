<?php
error_reporting(0);
$xml = simplexml_load_file("note.xml") or die("Gagal me-load file.");
echo json_encode($xml);