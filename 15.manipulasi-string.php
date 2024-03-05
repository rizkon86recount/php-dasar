<?php

$name = "Mohamad Rizkon Nurkholis";

echo "Name : " . $name . PHP_EOL;
echo "Umur : " . 100 . PHP_EOL;


$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.07";
var_dump($valueFloat);


$name = "Rizkon";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;

echo "Hello " . $name . ", Selamat belajar PHP" . PHP_EOL;
echo "Hello $name, selamat belajar PHP" . PHP_EOL;   //parsing variabel

$var = "var";
echo "This is {$var}s" . PHP_EOL;
