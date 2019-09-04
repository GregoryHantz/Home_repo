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
		return 'Adding ' . parent::getName() . ", with number of angles: " . $this->angles;
	}
}



$rectangle = new Rectangle('rectangle', 'figure', '4');
var_dump($rectangle);

echo $rectangle->getName();
