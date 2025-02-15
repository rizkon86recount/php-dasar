<?php

// $name = "rizkon"; //global scoope

// function sayHello()
// {
//     global $name;  //global keyword
//     echo $name . PHP_EOL;


//     // var_dump($GLOBALS);
//     echo $GLOBALS["name"] . PHP_EOL;
// }

// sayHello();



$name = "rizkon"; // global scope

function sayHello()
{
    echo "Hello {$GLOBALS['name']}" . PHP_EOL;
}

sayHello();