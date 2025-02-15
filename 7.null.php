<?php
$name = "rizkon";
$name = null;

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null?: ";
var_dump(is_null($name));
echo "\n";

$contoh = "Rizkon";
unset($contoh);

var_dump(isset($contoh));

$contoh = "Rizkon";

var_dump(isset($contoh));
