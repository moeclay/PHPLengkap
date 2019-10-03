<?php
$xml = simplexml_load_file("books.xml") or die("Gagal me-load file.");

foreach($xml->children() as $books){
	echo $books->title.", ";
	echo $books->author.", ";
	echo $books->year.", ";
	echo $books->price."<br>";
}