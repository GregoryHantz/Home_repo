<?php

function read($readfile){
 $file = fopen($readfile, 'r+');
 $text = file($readfile);
while (! feof($file)) {
 return $text;
}
fclose($file);
}

function type($readfile, $typefile){
 $size = sizeof($readfile);
 $type = fopen($typefile, "w");
for ($i = 0; $i < $size; $i+=2) {
fwrite($type, $readfile[$i]);
 
}
fclose($type);
}
$r = read ('C:\OSPanel\domains\my\64.txt');
type($r,'C:\OSPanel\domains\my\66.txt');
echo "You did it";