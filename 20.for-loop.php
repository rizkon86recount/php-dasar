<?php



for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke $counter" . PHP_EOL;
}


for ($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}


// sintaks alternatif

for ($counter = 10; $counter >= 1; $counter--) :
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;
