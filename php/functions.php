<?php

function arraySort(array $array, $key = 'sort', $sort = SORT_ASC): array
{
    $sortArray = $array;

    array_multisort(array_column($sortArray, $key), $sort, $sortArray);

    return $sortArray;
}
