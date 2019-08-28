<?php

/**
 * @param array $someRandomArray
 * @param $itNum
 * @return array
 */
function stackSortArray(array $someRandomArray, &$itNum) : array
{
    $sortedArray = [];
    $a = $someRandomArray;


  for ($i = 1; $i < count($a); $i++) {
    $x = $a[$i];
    for ($j = $i - 1; $j >= 0 && $a[$j] > $x; $j--) {
   
      $a[$j + 1] = $a[$j];
    }
   
    $a[$j + 1] = $x;
    $sortedArray = $a;
  }

    return $sortedArray;
};
