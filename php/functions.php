<?php

function cutString(string $line, $length = 12, $appends = '...'): string
{
    $strLength = mb_strlen($line);

    if ($strLength > $length) {
        return mb_substr($line, 0, $length) . $appends;
    } else {
        return $line;
    }
}
