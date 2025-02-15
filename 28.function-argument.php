<?php

// function sayHello($name = "Anonymous")
// {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("Rizkon");
// sayHello("Nanda");
// sayHello();


function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Rizkon");
sayHello("Nanda");


// contoh lagi type deklarasi function
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true,  false);
// sum([], []);  //ini salah


//contoh lagi
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);
