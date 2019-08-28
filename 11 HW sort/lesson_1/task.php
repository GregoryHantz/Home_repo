<?php

/**
 * @param array $someRandomArray
 * @param $itNum
 * @return array
 */
function sortArray(array $someRandomArray, &$itNum) : array
{
    do {
        $isSorted = false;

        for ($i = 0; $i < count($someRandomArray) - 1; $i++) {

            $previous = $someRandomArray[$i];
            $next = $someRandomArray[$i + 1];

            if ($previous > $next) {

                $someRandomArray[$i] = $next;
                $someRandomArray[$i + 1] = $previous;

                if (!$isSorted) {
                    $isSorted = true;
                }
            }

            $itNum++;
        }

    } while ($isSorted);

    return $someRandomArray;
};
