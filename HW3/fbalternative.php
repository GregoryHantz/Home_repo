<?php

function read($readfile){
	$file = fopen($readfile, 'r+');
	$text = file($readfile);
	while (! feof($file)) {
		return $text;
	}
	fclose($file);
}
function fizzbuzz($filesize){
	$count = sizeof($filesize);
for ($i=0;$i<$count;$i++){
$FB_array = explode(" ",$filesize[$i]);
$F = $FB_array[0];
$B = $FB_array[1];
$Z = $FB_array[2];
$w = '';

for ($a = 1; $a <= $Z; $a ++) {
	if ($a % $F == 0) {
		$w .= "F";
	}
	if ($a % $B == 0) {
		$w .= "B";
	}
	if (($a % $F!= 0) && ($a % $B!= 0)) {
		$w .= $a;
	}
} 
var_dump($w);
type($w,'result.txt');
} 
}
function type($name,$secondfile){
	$newfile = fopen($secondfile, "a");
	fwrite($newfile, $name."\r\n");
	}
$r = read('fb.txt');
fizzbuzz($r);