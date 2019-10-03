<?php
$xml = simplexml_load_file("note.xml") or die("Gagal me-load file.");

echo $xml->to."<br>";
echo $xml->from."<br>";
echo $xml->heading."<br>";
echo $xml->body;