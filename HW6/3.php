<?php

$file = '3numbers.txt';
$array = readFileSource($file);

function readFileSource(string $fileName)
{
    $file = fopen($fileName, 'r');
    $sourceArray = [];
    while (!feof($file)) {
        $sourceArray[] = fgets($file);
    }
    fclose($file);
    return $sourceArray;
}

function getCorrectArray($array)
{
    foreach ($array as $key => $value) {
        $numbers = explode(";", $value);
        // результат суммы строки;
        $summ = $numbers[0];
        $sum = explode(" ", $summ);
//        сумма элементов в первой части
        $summOfFirst = array_sum($sum);
//        Колличество элементов в первой части
        $countOfFirst = count($sum);
        $resultt = $numbers[1];
        $result = explode(" ", $resultt);
//        результат по заданию
        $resultFullDell = $result[0];
//        остаток после деления по заданию
        $resultOstDell = $result[1];
//        наш остаток деления
        $resultFirstOstDell = $summOfFirst % $countOfFirst;
//        целое деление
        $resultFirstDell = intdiv($summOfFirst, $countOfFirst);
        $numberString = $key + 1;

        if ($resultFullDell == $resultFirstDell && $resultOstDell == $resultFirstOstDell) {
            echo 'In ' . $numberString . ' string ' . trim($value) . ' is TRUE' . PHP_EOL;
        } else echo 'In ' . $numberString . ' string ' . trim($value) . ' is FALSE' . PHP_EOL;
    }

}

getCorrectArray($array);