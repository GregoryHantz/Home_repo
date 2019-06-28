<?php

function read($readfile){
	$file = fopen($readfile, 'r+');
	$text = file($readfile);
	while (! feof($file)) {
	return $text;
	}
	fclose($file);
}

function zamer($filesize){
	$count = sizeof($filesize);
 	$fulllenght = 0;
	for($i = 0;$i < $count;$i++){
		$fulllenght += (iconv_strlen($filesize[$i]));
	}
	$average = $fulllenght / $count;
	return $average;	
}

function type($name,$firstfile,$secondfile){
	$newfile = fopen($secondfile, "w");
	for($i=0;$i<sizeof($firstfile);$i++){

		if((iconv_strlen($firstfile[$i]))>$name){
		fwrite($newfile, $firstfile[$i]);
		}		
	}
}

$r = read('C:\OSPanel\domains\my\64.txt');
$z = zamer($r);
type($z,$r,'C:\OSPanel\domains\my\65.txt');
echo "i cant believe it's working";


