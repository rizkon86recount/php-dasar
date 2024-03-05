<?php
$a = 10;

$b = ++$a;
$a = $a + 1;  // jika pre decrement. ++nya di depan $a
$b = $a;       // analoginya seperti disamping


// ini jika post decrement, ++nya di belakang $a
$b = $a++;
$b = $a;   //analoginya
$b = $a + 1;

var_dump($a);
var_dump($b);
