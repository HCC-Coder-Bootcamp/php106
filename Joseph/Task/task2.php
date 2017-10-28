<?php

$array_of_numbers = [];

do {

    $input = readline('Add number in array (x to quit) : ');

    if ($input !== 'x') {
        $array_of_numbers[] = $input;
    }

    echo "array_of_numbers contains : " . PHP_EOL;
    print_r($array_of_numbers);
    echo  PHP_EOL . "==================================" . PHP_EOL . PHP_EOL;

} while($input !== 'x');

