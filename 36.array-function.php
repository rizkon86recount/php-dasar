<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
// simpelkan dibawah ini
// $dataResult = array_map(fn (int $value) => $value * 10, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));


$person = [
    "first_name" => "Rizkon",
    "last_name" => "Nanda"
];

var_dump(array_keys($person));
var_dump(array_values($person));
