<?php

// input age and name into associative array, generate age table


$array_of_ages = [];

// input value into array
do {

    $input_name = readline('input name : (x to skip) ');

    if ($input_name !== 'x') {

        $input_age = readline('input age : ');
        $array_of_ages[$input_name] = $input_age;
        // $new_person['name'] = $input_name;
        // $new_person['age'] = $input_age;
        // $array_of_ages[] = $new_person;
    }

} while($input_name !== 'x');

echo  PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
echo ' Name ' . "\t |" . ' Age' . PHP_EOL;
foreach ($array_of_ages as $name => $age) {
    echo " $name \t | $age" . PHP_EOL;
}


echo  PHP_EOL . PHP_EOL . "++++++++++++++++++++++++++++++++++" . PHP_EOL . PHP_EOL;
