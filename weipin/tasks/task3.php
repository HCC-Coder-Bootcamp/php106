<?php 

	$items = [];

	do {

		$input = readline( "Input:" . PHP_EOL );
		$items[] = $input;
		
	} while ( $input !== 'x');

	print_r($items);

	foreach ($items as $index => $item) {
		if ( $items[$index] === $items[$index+1] ) {
			unset( $items[$index] ); 
		}
	}

	echo "After remove duplicate item " . PHP_EOL;

	print_r($items); 

 ?>