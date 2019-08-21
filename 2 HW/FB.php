<?php

echo "\nEnter Fizz";
echo "\nEnter Buzz";
echo "\nEnter the last number\n";
$handle = fopen ("php://stdin","r");

$F = fgets ($handle);
$B = fgets ($handle);
$Z = fgets ($handle);

for ($a = 1; $a <= $Z; $a ++) {
	if ($a % $F == 0) {
		echo "F";
	}
	if ($a % $B == 0) {
		echo "B";
	}
	if (($a % $F!= 0) && ($a % $B!= 0)) {
		echo "$a";
	}
}