<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionnYangAkanDipanggil = "foo";
$functionnYangAkanDipanggil();

$functionnYangAkanDipanggil = "bar";
$functionnYangAkanDipanggil();


//contoh lagi
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Rizkon", "sampleFunction");
sayHello("Rizkon", "strtoupper");
sayHello("RIZKON", "strtolower");
