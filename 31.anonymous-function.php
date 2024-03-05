<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Rizkon");
$sayHello("Nanda");


//contoh lagi
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Rizkon", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Rizkon", $filterFunction);


//contoh lagi
$firstName = "Rizkon";
$lastName = "Nanda";

$sayHello = function () use ($firstName, $lastName) {
    echo "hello $firstName $lastName" . PHP_EOL;
};

$sayHello();
