<?php

 // 1. sort array in ascending order

$array = [];
$ascArray = [];

do {
	echo system('clear');
	// print_r($array);
	print_r($ascArray);
	$ascArray = [];
	$input = readline('Add a number to array (x to exit): ');
	if ($input !== 'x') {
		$array[] = $input;
	}
	$temp = $array;
	while ($temp != []) {
	$first = 1;
		foreach ($temp as $index => $value) {
			if ($first) {
				$min = $value;
				$key = $index;
				$first = 0;
			} else if ($value < $min) {
				$key = $index;
				$min = $value;
			}
		}
		echo $min;
		$ascArray[] = $min;
		unset($temp[$key]);
	}
} while ($input !== 'x');