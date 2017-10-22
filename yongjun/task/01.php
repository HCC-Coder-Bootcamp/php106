<?php

// 1. input 11 numbers in array, find the smallest number

$array = [];

for ($i = 0; $i < 11; $i++) { 
	echo system('clear');
	print_r($array);
	$array[] = readline('Add a new number to the array : ');
}

echo system('clear');
print_r($array);

$min = $array[0];
foreach ($array as $index => $value) {
	if ($value < $min) {
		$min = $value;
	}
}

echo "min value is $min" . PHP_EOL;