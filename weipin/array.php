<?php 

	$names = [ 'Alice' , 'Bob' , 'Colin' , 'Dinesh' ];
	echo $names[2];
	echo $names[1];
	$names[] = 'Elliot';
	echo $names[4];
	print_r($names);

	$i = 0;
	while ( $i < 5 ) {
		echo $names[$i] . PHP_EOL;
		$i++;
	}

	for ( $i = 0 ; $i < 5 ; $i++) { 
		echo $names[$i] . PHP_EOL;
	}

	//foreach ($variable as $key => $value) 

	foreach ( $names as $index => $name ) {
		echo $index . ': ' . $name . PHP_EOL;
	}

 ?>