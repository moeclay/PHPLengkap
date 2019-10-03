<?php
require '01_basic.php';

$apple = new Fruit();
$apples = null;


// bernilai true
if($apple instanceof Fruit){
	echo "iya, sebuah instance";
}else{
	echo "bukan sebuah instance";
}