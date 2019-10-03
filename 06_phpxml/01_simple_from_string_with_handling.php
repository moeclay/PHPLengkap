<?php
libxml_use_internal_errors(true);
$myXMLData = 
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>John Doe</user>
<email>john@example.com</email>
</document>";

echo "<hr>akan muncul jika terjadi kesalahan tag<hr>";
$xml = simplexml_load_string($myXMLData);
if($xml === false){
	echo "Failed loading XML : ";
	foreach(libxml_get_errors() as $error){
		echo "<br>",$error->message;
	}
}else{
	print_r($xml);
}