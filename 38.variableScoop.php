<?php

$name = "rizkon"; //global scoope

function sayHello()
{
    global $name;  //global keyword
    echo $name . PHP_EOL;
}

sayHello();
