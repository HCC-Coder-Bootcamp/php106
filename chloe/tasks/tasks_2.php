<?php 
	
	$arrayNo = [];

	do {
		$input = readline('Input number: ' . PHP_EOL);
		if ($input !== 'x'){
			$arrayNo[] = $input;
		}
		print_r($input . PHP_EOL);

	} while ( $input !== 'x');
//
	$sum = 0;
	$i = 1;
	$answer = 0;
	foreach ($arrayNo as $index => $number) {
    		$sum += $number;
    		$answer = $sum / $i;
    		$i ++;
		}
		
	echo "sum is $sum" . PHP_EOL;
	echo "average = $answer";



