<?php
//input 7 numbers in array, find the largest number

$numbers = [];

for($i = 0; $i < 7; $i++) {

	$numbers[] = readline('Input Number :');
}

$max = null;
foreach ($numbers as $index => $number) {
	 
	 if ($number > $max) {
	 	$max = $number;
	 }
}

echo "The biggest number is : $max" .PHP_EOL;