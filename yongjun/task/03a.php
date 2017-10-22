<?php

 // 3. input any value in array, remove duplicate item

$array = [];

do {
	echo system('clear');
	print_r($array);
	$input = readline('add number in array : (x to quit) ');
	if ($input !== 'x') {
		$isDuplicate = 0;
		foreach ($array as $key => $value) {
			if ($input == $value) {
				$isDuplicate = 1;
			}
		}
		if (!$isDuplicate) {
			$array[] = $input;	
		}
	}
		
} while ($input !== 'x');