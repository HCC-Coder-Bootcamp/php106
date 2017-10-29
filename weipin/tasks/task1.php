<?php 

	$numberArray = [];

	for ( $i = 0; $i < 11 ; $i++) { 
		$numberArray[] = readline( "Input number $i:" . PHP_EOL );
	}

	print_r($numberArray);

	$small = $numberArray[0];

	foreach ( $numberArray as $index => $number ) {
		if ( $number < $small ) {
			$small = $number;
		}
	}

	echo "The smallest number: " . $small . PHP_EOL;

 ?>