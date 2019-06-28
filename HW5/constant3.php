<?php

define("LOOP_NUMBER", 541);

function getPrimes($max_number)
{
    $primes = [];
    $is_composite = [];
    $summ = 0;
    for ($i=4; $i<=$max_number; $i+=2){
        $is_composite[$i] = true;   
    }
    $next_prime = 3;
    while ($next_prime<=(int)sqrt($max_number)){
        for ($i=$next_prime*2; $i<=$max_number; $i+=$next_prime){
            $is_composite[$i] = true;   
        }
        $next_prime += 2;
        while ($next_prime<=$max_number && isset($is_composite[$next_prime])){
            $next_prime+=2; 
        }
    }
    for ($i=2; $i<=$max_number; $i++){
        if (!isset($is_composite[$i]))
                $primes[] = $i;
        }
        for($i=0;$i<sizeof($primes);$i++){
        $summ+=$primes[$i];}
    return $summ;
}
$x = getPrimes(LOOP_NUMBER);
echo "The summ of the first 100 prime numbers is", " ", $x;
