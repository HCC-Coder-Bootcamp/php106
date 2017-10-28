<?php

$array_of_numbers = [];

for ($i = 0; $i < 7; $i++) {

    $array_of_numbers[] = readline('Add number in array : ');
    echo "Array_of_Numbers contains : " . PHP_EOL;
    print_r($array_of_numbers);
    echo  PHP_EOL . "==================================" . PHP_EOL . PHP_EOL;
}

$max = $array_of_numbers[0];
foreach ($array_of_numbers as $index => $number) {
    if ($number > $max) {
        $max = $number;
    }
}

echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
echo "Max number is : $max";
echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;