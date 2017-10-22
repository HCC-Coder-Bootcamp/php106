<?php

//  3. input any value in array, then search an element in the array

$array_of_values = [];

// input value into array
do {

    $input = readline('add value in array : (x to continue) ');

    if ($input !== 'x') {
        $array_of_values[] = $input;
    }

    echo "array_of_values contains : " . PHP_EOL;
    print_r($array_of_values);
    echo  PHP_EOL . "=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/=/" . PHP_EOL . PHP_EOL;

} while($input !== 'x');

// input value to search
$input_search = readline('what are you looking for? : ');


// loop and search
$is_found = false; // pessimistic
$position = null;
foreach ($array_of_values as $index => $value) {
    if ($value == $input_search) {
        # yay found
        $is_found = true;
        $position = $index;
    }
}

echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
if ($is_found) {
    echo "$input_search is found at position [$position] in array";
} else {
    echo "we're not able to find $input_search in the array";
}
echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
