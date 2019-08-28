<?php

/**
 * @param array $someRandomArray
 * @param $itNum
 * @return array
 */
function advancedSortArray(array $someRandomArray, &$itNum) : array
{
    $start = 0;
    $backstart = count($someRandomArray) - 1;

    do {
        $isSorted = false;

        for ($i = $start; $i < count($someRandomArray) - 1; $i++) {

            $previous = $someRandomArray[$i];
            $next = $someRandomArray[$i + 1];

            if ($previous > $next) {

                $someRandomArray[$i] = $next;
                $someRandomArray[$i + 1] = $previous;

                if (!$isSorted) {
                    $isSorted = true;
                }

                $backstart = $i;
            }

            $itNum++;
        }

        for ($z = $backstart; $z !== 0; $z--) {

            $previous = $someRandomArray[$z];
            $next = $someRandomArray[$z - 1];

            if ($previous < $next) {

                $someRandomArray[$z] = $next;
                $someRandomArray[$z - 1] = $previous;

                if (!$isSorted) {
                    $isSorted = true;
                }

                $start = $z;
            }

            $itNum++;
        }

    } while ($isSorted);

    return $someRandomArray;
};
