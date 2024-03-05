<?php
$names = ["Mohamad", "Rizkon", "Nurkholis"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}
//diatas itu perulangan for biasa


//dibawah ini perulangan foreach
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}



//dibawah ini jika butuh key value
$person = [
    "firstName" => "Mohamad",
    "middleName" => "Rizkon",
    "lastName" => "Nurkholis"
];

foreach ($person as $key => $value) {
    echo ("$key => $value") . PHP_EOL;
}
