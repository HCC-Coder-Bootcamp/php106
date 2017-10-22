<?php

// 2. input any numbers in array, sum all numbers

$array_of_numbers = [];

// input numbers into array
do {

    $input = readline('add number in array : (x to quit) ');

    if ($input !== 'x') {
        $array_of_numbers[] = $input;
    }

    echo "array_of_numbers contains : " . PHP_EOL;
    print_r($array_of_numbers);
    echo  PHP_EOL . "=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/" . PHP_EOL . PHP_EOL;

} while($input !== 'x');

// find the sum
$sum = 0;
foreach ($array_of_numbers as $index => $number) {
    $sum += $number;
}

echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
echo "\tsum is : $sum";
echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
