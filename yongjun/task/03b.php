<?php

 // 3. input any value in array, remove duplicate item

$array = [];

do {
	echo system('clear');
	print_r($array);
	$input = readline('add number in array : (x to quit) ');
	if ($input !== 'x') {
		$array[] = $input;	
	}
		
} while ($input !== 'x');

# remove duplicate

echo system('clear');
foreach ($array as $key => $value) {
	foreach ($array as $index => $number) {
		if ($index > $key) {
			if ($number == $value) {
				unset($array[$index]);
			}
		}
	}
}
$newArray = [];
foreach ($array as $key => $value) {
	$newArray[] = $value;
}


print_r($array);
print_r($newArray);