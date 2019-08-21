<?php

function read($readfile){
 $file = fopen($readfile, 'r+');
 $text = file($readfile);
while (! feof($file)) {
 return $text;
}
fclose($file);
}

function massive($filesize){
$count = sizeof($filesize);
$lenght = 0;
$longest=0;
for($i = 0;$i < $count;$i++){
trim($filesize[$i], " ");
}
for($i = 0;$i < $count;$i++){
 if ((strlen($filesize[$i])) > ($lenght)) {
  $lenght = strlen($filesize[$i]);
  $longest=$i;
 
}

}
 echo ($longest+1), "string"."\r\n";
 echo $lenght , "symbols";
}
$r = read ('64.txt');
massive ($r);