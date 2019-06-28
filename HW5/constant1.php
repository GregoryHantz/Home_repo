<?php

// Задаем константы
define("LOOP_NUMBER", 5);
define("LOOP_LIMIT", 100);
define("LOOP_START", 1);
define("MESSAGE", 'numbers are divisible by 5 in the range from 1 to 100');
//Задаем счётчик количества цифр которые делятся на 5. Задаем цикл, при котором каждое число в диапазоне от 1 до 100 при делении на пять без остатка увеличивает счётчик на 1
$counter = 0;
$a = range(LOOP_START, LOOP_LIMIT);
foreach($a as $key => $value){
	if($value % LOOP_NUMBER == 0){
		$counter +=1;
	}
}
//Выводим результат счётчика после окончания цикла
echo $counter, " ", MESSAGE;