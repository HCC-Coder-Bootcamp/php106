<?php 

	$inputNumber = [];

	// for ($i=0; $i < 10 ; $i++) { 
	// 	$inputNumber[] = readline( "Number $i: " . PHP_EOL );
	// }

	do {
		$input = readline( "Number:" . PHP_EOL );
		$inputNumber[] = $input;
	} while ( $input !== 'x' );

	print_r( $inputNumber );

	$all = null;
	$ans = null;

	foreach ( $inputNumber as $index => $number ) {
		$all = $number + $all;
	}
	
	$ans = $all / $index;

	echo "Average: " . number_format( $ans, 2 , "." , "," ) . PHP_EOL;

 ?>