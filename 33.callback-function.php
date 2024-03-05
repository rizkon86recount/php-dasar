<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("rizkon", "strtoupper");
sayHello("rizkon", "strtolower");
sayHello("rizkon", function (string $name): string {
    return strtoupper($name);
});
sayHello("rizkon", fn ($name) => strtoupper($name));
