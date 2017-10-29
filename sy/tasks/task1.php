<?php

//input 11 numbers in array,find the smallest number.

$numbers = [];

for($i = 0;$i < 11; $i++) {
	$numbers[] = readline('Number :');
}
	print_r($numbers);
	echo "------------------" . PHP_EOL . PHP_EOL;

$min = $numbers;
foreach ($numbers as $index => $number) {
	
	if($number < $min) {
		$min = $number;
	}
}
	echo 'The smallest number is : ' . $min . PHP_EOL;