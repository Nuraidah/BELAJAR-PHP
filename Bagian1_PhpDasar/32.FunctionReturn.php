<?php

function sum (int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

function getFinalvalue(int $value): string
{
    if ($value >= 80){
        return "A";
    } else if ($value >= 70) {
        return "B";
    }else if ($value >= 60) {
        return "C";
    }else if ($value >= 50) {
        return "D";
    } else {
        return "1";
    }
    echo "UPS" . PHP_EOL;
}

$score = getFinalvalue(90);
var_dump($score);


$score = getFinalvalue(30);
var_dump($score);