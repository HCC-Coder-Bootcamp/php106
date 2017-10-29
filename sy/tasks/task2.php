<?php
//input any numbers in array, find the average

$numbers = [];

do {

	$input = readline('Input number :(enter x to exit)');

	if ($input !=='x') {
		$numbers[] = $input;
	}
}while ($input !== 'x');


$total = 0;
$avg = 0;
foreach ($numbers as $index => $number) {
	
	$total += $number;
	$avg = $total / 2;
}

echo "The average is $avg." . PHP_EOL;