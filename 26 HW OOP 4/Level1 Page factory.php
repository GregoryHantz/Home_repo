<?php

class Page
{
	public $text;
	public $padding;
	// public function __construct($text, $padding) {
	// 	$this->text = $text;
	// 	$this->padding = $padding;
}
	

class PageFactory
{
	public function create(){
	static $counter = 1;
	if ($counter %2 == 0) {
		$padding = "left";
	}
	else $padding = "right";
	$counter++;

$result = new Page();
$result->padding = $padding;
return $result;
	}
}
$pageFactory = new PageFactory();

$page1 = $pageFactory->create();
var_dump($page1->padding);//Выводит right

$page2 = $pageFactory->create();
var_dump($page2->padding);//Выводит left

$page3 = $pageFactory->create();
var_dump($page3->padding);//Выводит right