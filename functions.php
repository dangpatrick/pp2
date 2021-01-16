<?php

function printArr($myArr)
{
    foreach ($myArr as $item)
    {
        echo $item . "<br>";
    }
}

function largest($larArr)
{
    return max($larArr);
}

function remDup($dupsArr)
{
    return array_unique($dupsArr);
}

function distribution($assArr)
{
    sort($assArr);
    $assArr = array_count_values($assArr);
    return $assArr;
}