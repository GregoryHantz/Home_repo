<?php


abstract class Figure
{
	public function showAngles()
	{
		echo '';
	}
}

class Triangle extends Figure
{
	public function showAngles()
	{
		echo 'This figure has 3 angles' ."\n";
	}
}

class Rectangle extends Figure
{
	public function showAngles()
	{
		echo 'This figure has 4 angles' ."\n";
	}
}

class Pentagon extends Figure
{	
	public function showAngles()
	{
		echo 'This figure has 5 angles' ."\n";
	}	
}

$rectangle = new Rectangle;
$triangle = new Triangle;
$pentagon = new Pentagon;

echo 'How many angles does this figure have?'."\n", $triangle->showAngles();

echo 'How many angles does this figure have?'."\n", $rectangle->showAngles();

echo 'How many angles does this figure have?'."\n", $pentagon->showAngles();