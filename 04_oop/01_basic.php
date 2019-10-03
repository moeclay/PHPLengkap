<?php
class Fruit {
	// properties
	var $name;
	var $color;
	var $weight;

	// method
	function set_name($n){
		$this->name = $n;
	}
	function get_name(){
		return $this->name;
	}
	function set_color($n){
		$this->color = $n;
	}
	function get_color(){
		return $this->color;
	}
}