<?php

 // 2. input any numbers in array, find the average

$array = [];
$i = 0;
$sum = 0;
$average = 0;

do {
	echo system('clear');
	if ($i) {	
		echo 'The average for (';
		foreach ($array as $key => $value) {
			if ($key != 0)echo ' + ';
			echo $value;
		}
		echo ') / ' . $i . ' = ' . $average . PHP_EOL;
	}
	print_r($array);
	$input = readline('add number in array : (x to quit) ');
	if ($input !== 'x') {
		$i++;
		$sum += $input;
		$array[] = $input;
		$average = $sum / $i;
	}
} while ($input !== 'x');