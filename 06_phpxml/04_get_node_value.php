<?php
$xml = simplexml_load_file("books.xml") or die("Gagal me-load file.");

echo $xml->book[2]->title."<br>";
echo $xml->book[2]->author."<br><hr>";
echo $xml->book[3]->title."<br>";
echo $xml->book[3]->author."<br>";