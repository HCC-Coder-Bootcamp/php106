<?php

$array_of_numbers = [];

for ($i = 0; $i < 11; $i++) {

    $array_of_numbers[] = readline('Add number in array : ');
    echo "Array_of_Numbers contains : " . PHP_EOL;
    print_r($array_of_numbers);
    echo  PHP_EOL . "==================================" . PHP_EOL . PHP_EOL;
}

$min = $array_of_numbers[0];
foreach ($array_of_numbers as $index => $number) {
    if ($number < $min) {
        $min = $number;
    }
}

echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
echo "Minimum number is : $min";
echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;