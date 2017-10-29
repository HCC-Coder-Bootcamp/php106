<?php
//input any numbers in array, sum all numbers

$numbers = [];

do {
	$input = readline('Number :');

	if ($input !=='x') {
		$numbers[] = $input;
	}
	print_r($numbers);
	echo "------------------" . PHP_EOL . PHP_EOL;

}while ($input !=='x');


$total = 0;
foreach ($numbers as $index => $number) {
	
	$total += $number;
}
	echo 'Sum of all numbers is :' . $total . PHP_EOL;