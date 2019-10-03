<?php
$xml = simplexml_load_file("books.xml") or die("Gagal me-load file.");

foreach($xml->children() as $books){
	echo $books->title['lang'];
	echo "<br>";
}