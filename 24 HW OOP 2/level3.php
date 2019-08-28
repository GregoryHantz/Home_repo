<?php

interface AddingVehicle
{
	public function add();

}

 abstract class Vehicle implements AddingVehicle
 {
 	public $country;
 	public $name;
 	public $numberOfWheels;
 	public $maxSpeed;

 	public function __construct($country, $name, $numberOfWheels, $maxSpeed)
 	{
 		$this->country = $country;
 		$this->name = $name;
 		$this->numberOfWheels = $numberOfWheels;
 		$this->maxSpeed = $maxSpeed;
 	} 

 	public function add()
 	{
 		echo '';
 	}
 }

 class Motorcycle extends Vehicle
 {
 	public function add()
 	{
 		echo ' Adding new motorcycle ' . $this->name;
 	}


 	public function parameters()
 	{
 		return 'From ' . $this->country . '. Name: ' . $this->name . '. numberOfWheels: ' . $this->numberOfWheels . '. and a max speed ' . $this->maxSpeed;
 	}
 }
 
 class Scooter extends Vehicle
 {

 	public function add()
 	{
 		echo ' Adding new scooter ' . $this->name;
 	}

 	 	public function parameters()
 	{
 		return 'From ' . $this->country . '. Name: ' . $this->name . '. numberOfWheels: ' . $this->numberOfWheels . '. and a max speed ' . $this->maxSpeed;
 	}
 }

 class Quadbike extends Vehicle
 {
 	 	public function add()
 	{
 		echo ' Adding new quadbike' . $this->name;
 	}
		public function parameters()
 	{
 		return 'From ' . $this->country . '. Name: ' . $this->name . '. numberOfWheels: ' . $this->numberOfWheels . '. and a max speed ' . $this->maxSpeed;
 }

}



$motorcycle = new Motorcycle('Japan', 'Suzuki SV650X', 2, '130 Mph');
$scooter = new Scooter('Japan', 'Suzuki ACCESS125', 2, '40 Mph');
$quadbike = new Quadbike('USA', 'TRX500FA6', 4, '28 Mph');

echo $motorcycle->parameters();
$motorcycle->add();

echo $scooter->parameters();
$scooter->add();

echo $quadbike->parameters();
$quadbike->add();




