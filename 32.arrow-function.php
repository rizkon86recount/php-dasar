<?php

$firstName = "Rizkon";
$lastName = "Nanda";

$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Hallo $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn () => ("Haaay $firstName $lastName") . PHP_EOL;


echo $anonymousFunction();
echo $arrowFunction();
