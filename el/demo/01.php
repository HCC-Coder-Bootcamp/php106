<?php

//  1. input 7 numbers in array, find the largest number

$array_of_numbers = [];

// input numbers into array
for ($i=0; $i < 7; $i++) {

    $array_of_numbers[] = readline('add number in array : ');
    echo "array_of_numbers contains : " . PHP_EOL;
    print_r($array_of_numbers);
    echo  PHP_EOL . "=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/" . PHP_EOL . PHP_EOL;
}

// find the max
$max = null;
foreach ($array_of_numbers as $index => $number) {
    if ($number > $max) {
        $max = $number;
    }
}

echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
echo "max number is : $max";
echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
