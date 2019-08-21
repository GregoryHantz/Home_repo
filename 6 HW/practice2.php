<?php

fwrite(STDOUT, "Enter number : ");
$enterNumber = trim(fgets(STDIN));


if ($enterNumber % 2 != 0 && $enterNumber > 1) {

star($enterNumber);
}
else echo 'fail';


 function star($num)
{
    $i = $num;
    $n = $num;
    while ($i--) {
        if ($i % 2 == 0) {
            echo str_repeat(' ', $i) . str_repeat('* ', $n - $i) . "\n";
        }
    }
    $a = $num;
    while ($a--) {
        if ($a % 2 != 0) {
            echo str_repeat(' ', $n - $a) . str_repeat('* ', $a) . "\n";
        }
    }
}