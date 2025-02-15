<?php
$counter = 1;

while ($counter <= 10) {
    echo "perulangan while ke-$counter" . PHP_EOL;
    $counter++;
}


//sintaks alternatif

$counter = 1;
while ($counter <= 10) :
    echo "perulangan while ke -$counter" . PHP_EOL;
    $counter++;
endwhile;
