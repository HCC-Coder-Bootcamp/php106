<?php 
	
	$names = ['Alice' , 'Bob' , 'Colin' , 'Dinesh' ];

	$i = 0;

	// echo $names[2];

	$names[] = 'Elliot';

	unset($names[1]);

	while ( $i < 4 ) {
		echo "$names[$i]" . PHP_EOL;
		$i++;
		
	}

	foreach ($names as $index => $name) {
		echo $index . ' : ' . $name . PHP_EOL;
	}