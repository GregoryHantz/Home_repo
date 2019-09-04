<?php

//Third level


//polygon-rectangle-square


class Polygon 
{
	private $name, $type;


	public function __set($name, $type)
	{
		$this->$name = $type;
	}

	public function get_info ()
	{
		return $this->name . ' ' . $this->type;
	}
}

class Rectangle extends Polygon 
{
	private $numberofangles;

	public function set_numberofangles ($angle) {
		$this->numberofangles = $angle;
	} 

	public function get_numberofangles () {
		return $this->numberofangles;
	}

	public function get_info () {
		return 'Adding ' . parent::get_info() . ", with number of angles: " . $this->get_numberofangles();
	}
}


class Square extends Rectangle
{
	
	private $condition;


	public function set_condition ($cond) {
		$this->condition = $cond;
	} 

	public function get_condition () {
		return $this->condition;
	}

	public function get_info() {
		return parent::get_info() .  ", and a condition: " . $this->get_condition() . "\n";
	}
}




$big_square = new Square();


$big_square->name = 'square';
$big_square->type = 'figure';


$big_square->set_numberofangles ('4');
$big_square->set_condition('all sides are equal');

echo $big_square->get_info();
