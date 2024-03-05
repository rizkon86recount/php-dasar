<?php

$name = "rizkon";

$otherName = &$name;

$otherName = "Nanda";

echo $name . PHP_EOL;


//contoh pass by reference
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;


//contoh lagi return reference
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a =  200;

$b = &getValue();
echo $b . PHP_EOL;
