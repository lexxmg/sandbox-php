<?php

function arraySort(array $array, $key = 'sort', $sort = SORT_ASC): array
{
    function foo($key, $sort)
    {
        return function ($a, $b) use ($key, $sort)
        {
            if ($sort === SORT_ASC) {
                return $a[$key] <=> $b[$key];
            } elseif ($sort === SORT_DESC) {
                return $b[$key] <=> $a[$key];
            }
        };
    }

    usort($array, foo($key, $sort));

    return $array;
}
