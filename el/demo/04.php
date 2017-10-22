<?php

//  merge 2 arrays into one third array

// defined 2 arrays
$array_of_values_01 = ['a', 'o', 'e', 's'];
$array_of_values_02 = [23, 65, 12];

// new array
$new_third_array = [];
foreach ($array_of_values_01 as $value) {
    $new_third_array[] = $value;
}
foreach ($array_of_values_02 as $value) {
    $new_third_array[] = $value;
}


echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;

print_r($new_third_array);

echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
