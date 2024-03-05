<?php

$values = array(10, 8, 9, 2.8);
var_dump($values);

$names = ["Mohamad", "Rizkon", "Nurkholis"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Nanda";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Ridwan";
var_dump($names);

var_dump(count($names));


$ikon = array(
    "id" => "Mohamad",
    "name" => "Rizkon",
    "age" => 21,
    "address" => array(
        "city" => "Bekasi City",
        "country" => "Indonesia"
    )
);

var_dump($ikon);
var_dump($ikon["name"]);
var_dump($ikon["address"]["city"]);


$budi = [
    "id" => "Nanda",
    "name" => "Utami",
    "age" => 22,
    "address" => [
        "city" => "Comal",
        "country" => "Indonesia"
    ]
];

var_dump($budi);
