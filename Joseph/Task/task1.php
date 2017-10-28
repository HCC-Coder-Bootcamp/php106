<?php

$array_of_numbers = [];

do {

    $input = readline('Add number in array (x to quit) :  ');

    if ($input !== 'x') {
        $array_of_numbers[] = $input;
    }

    echo "Array_of_numbers contains : " . PHP_EOL;
    print_r($array_of_numbers);
    echo  PHP_EOL . "==================================" . PHP_EOL . PHP_EOL;

} while($input !== 'x');

$sum = 0;
$average = 1;
foreach ($array_of_numbers as $index => $number) {
    $sum += $number;
    $total = $sum / $average;
    $average++;
}

echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
echo "\tAverage is : $total";
echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;