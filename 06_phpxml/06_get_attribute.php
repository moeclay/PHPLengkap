<?php
$xml = simplexml_load_file("books.xml") or die("Gagal me-load file.");

echo $xml->book[0]['category']."<br>";
echo $xml->book[1]->title['lang']."<br>";
echo $xml->book[1]->title."<br>";