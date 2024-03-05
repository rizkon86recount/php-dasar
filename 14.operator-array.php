<?php

$first = [
    "first_name" => "Mohamad"
];


$last = [
    "first_name" => "Mohamad",
    "last_name" => "Rizkon"
];


$full = $first + $last;
var_dump($full);



$a = [
    "first_name" => "Mohamad",
    "last_name" => "Rizkon"
];

$b = [
    "last_name" => "Rizkon",
    "first_name" => "Mohamad"
];

var_dump($a == $b);
var_dump($a === $b);
