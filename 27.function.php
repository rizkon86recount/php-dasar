<?php
function sayHellow()
{
    echo "Hello function" . PHP_EOL;
}
sayHellow();


//contoh lagi dibawah ini
$buat = true;

if ($buat) {
    function sayHello()
    {
        echo "Hello Rizkon function" . PHP_EOL;
    }
}

sayHello();
