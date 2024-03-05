<?php

function increment()
{
    static $counter = 1; // static scoop
    echo "counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();
increment();
increment();
