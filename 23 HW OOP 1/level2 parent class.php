<?php

class Polygon
{
	public $name;
	public $type;

	public function __construct($name, $type) {
		$this->name = $name;
		$this->type = $type;
	}

	public function getName() {
		return $this->name . ' ' . $this->type;
	}
}

class Rectangle extends Polygon
{
	public $angles;

	public function __construct($name, $type, $angles) {
		parent::__construct($name, $type);
		$this->angles = $angles;
	}

	public function getName() {
		return ' ' . parent::getName() . ", with number of angles: " . $this->angles;
	}
}

class Square extends Rectangle
{
	public $cond;

	public function __construct($name, $type, $angles, $cond) {
		parent::__construct($name, $type, $angles);
		$this->cond = $cond;
	}

	public function getName() {
		return 'Adding' . parent::getName() . ", and a condition: " . $this->cond . "\n";
	}
}

$square = new Square('square', 'figure', '4', 'all sides are equal');
var_dump($square);

echo $square->getName();
