<?php

function sum(int $first, int $last): int
{
    $total = $first + $last;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 1);
var_dump($result);



//contoh lagi
function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(50);
var_dump($score);

$score = getFinalValue(49);
var_dump($score);
