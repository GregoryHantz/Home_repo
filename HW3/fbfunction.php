<?php

function read($readfile){
 $file = fopen($readfile, 'r+');
  $text1 = file($readfile);
 while (! feof($file)) {
  $text = fgets($file);
  return $text1;
 }
 fclose($file);
}
function fizzbuzz($filesize){
 $count = sizeof($filesize);
for ($j = 0;$j < $count;$j++){
$FB_array = explode(" ", $filesize[$j]);
$F = $FB_array[0];
$B = $FB_array[1];
$Z = $FB_array[2];

for ($a = 1,$i=0; $a <= $Z; $a ++,$i++) {
 if ($a % $F == 0) {
  $W[$j][$i] = "F";
 }
 if ($a % $B == 0) {
  $W[$j][$i] = "B";
 }
 if (($a % $F!= 0) && ($a % $B!= 0)) {
  $W[$j][$i] = "$a";
 }

} echo PHP_EOL;
}
 return $W;
}
function type($name,$secondfile){
 $newfile = fopen($secondfile, "w");
  for($j=0;$j<sizeof($name);$j++){
     for($i=0;$i<count($name[$j]);$i++){
       echo  $name[$j][$i];
       if($i+1==count($name[$j])){
          fwrite($newfile, $name[$j][$i]."\r\n");
       }else fwrite($newfile, $name[$j][$i]);

     }echo PHP_EOL; 
  }
}

 $r = read('fb.txt');
$fb = fizzbuzz($r);
type($fb,'result.txt');