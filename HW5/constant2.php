<?php

define("LOOP_NUMBER", 100);

function get_prime_numbers($cnt) {
    //Проверяем, правильно ли заданы параметры.
    if (!is_int($cnt)) {
        throw new Exception('Parameter $cnt shoud be an integer number.');
    }
    
    $primes = array();      //Массив с простыми числами
    $searching_number = 2;  //Число, которое проверяется на простоту. Начало с двойки
    $is_prime = true;       //Если число простое - устанавливаем в true
    $summ = 0;				//Инициализация суммы, в которую будут добавляться простые числа
    //Находим столько простых чисел, сколько указано в параметре $cnt
    while (count($primes) < $cnt) {
        //Делим поочередно искомое число на все числа меньше искомого.
        //Если поделится без остатка, значит это число не простое.
        for ($dividor=2; $dividor<$searching_number; $dividor++) {
            if ($searching_number % $dividor == 0) {
                $is_prime = false;
                break;
            }
        }
        
        //Если число простое, добавляем его в массив.
        if ($is_prime) {
            array_push($primes, $searching_number);

        }
        
        //Ищем следующее число.
        $is_prime = true;
        $searching_number++;
    }
    //Суммируем значения в массиве для получения суммы ста первых простых чисел.
    for($i=0;$i<sizeof($primes);$i++){
    	$summ+=$primes[$i];
    }
    //Выводим результат работы
    echo "The summ of the first 100 prime numbers is", " ", $summ;
}
get_prime_numbers(LOOP_NUMBER);