<?php

echo "If you want to see a game meme, press 1 !\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input == 1) ? "Press F to pay respect" : "Maybe you want another meme with press X to win?"; 

echo "\n";