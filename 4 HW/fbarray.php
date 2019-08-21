<?php

function read($numbers){
//разбиваем каждую строку массива на составляющие для условия фб, эксплоудом убираем пробелы
 list($f, $b, $z) = 
  array_map('intval', explode(' ', $numbers));
 return [$f, $b, $z];
}

function fizzbuzz($fb_source){
//Переносим полученные переменные в условие фб. Инициализируем сумму, в которую будет добавляться решение фб. Считаем ФБ по циклу
 $sum = '';
 list($f, $b, $z) = $fb_source;
 for ($i=1; $i <= $z; $i++) { 
  $sum .= !($i % $f)? 'F':'';
  $sum .= !($i % $b)? 'B':
   (($i % $f)? $i:'');
  $sum .= ' ';
 }
 return rtrim($sum) . PHP_EOL;
}

function type($fb_type){
//Создаем новый файл, в который будут записаны результаты и записываем в него полученные решения
 $newfile = fopen("fbresults.txt", "a");
 fwrite($newfile, $fb_type);
     }echo PHP_EOL; 
  
$source = file("fb.txt");
$arr = array_map('read', $source);
$fb = array_map('fizzbuzz', $arr);
array_map('print_r', $fb);
array_map('type', $fb);