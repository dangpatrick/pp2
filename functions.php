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