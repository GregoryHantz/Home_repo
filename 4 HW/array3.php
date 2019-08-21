<?php
//Создаем массив строк
$array = ['wow wow','pop lifestyle', 'lady breeze'];
function read($symbols){
//Меряем размер строк в массиве, убирая пробелы
$size=sizeof($symbols);
for ($i1=0; $i1<$size; $i1++){
$lenght=str_replace(' ','',$symbols[$i1]);
echo $symbols[$i1]; echo PHP_EOL;
//Для каждой строки по циклу просчитываем количество случаев появления конкретных букв
foreach (count_chars($lenght, 1) as $i => $val) {
   echo "There were ", $val, " instance(s) of \"" , chr($i) , "\" in the string.\n";
		}
	}
}

read($array);