<?php
$array = [];
$runTimes = 0;
$average = 0;
$number = 1;

	do {
		$input = readline();
		if ($input!='x') {
			$array[]=$input;
			print_r($array);

		foreach ($array as $arrNumber => $arrContent) {
			$average = ($average + $arrContent);
			$averageAns = $average / $number;
			$number++;
			echo "Average = $averageAns, Exit = 'x'".PHP_EOL;
		
			}
		}
			
	}while ($input != 'x');