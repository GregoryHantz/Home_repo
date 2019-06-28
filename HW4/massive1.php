<?php

$array = [1, 2, 34, 43, 20, 18, 7];

function biggest($number){
	$count = sizeof($number);
	$topnumber = 0;
	for($i = 0;$i < $count;$i++){
		if ($topnumber < $number[$i]){
			$topnumber = $number[$i];
		}
	}	
	echo $topnumber;
	}



biggest($array);