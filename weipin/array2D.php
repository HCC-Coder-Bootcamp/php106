<?php 

	$names = [
		[ 'Amy' , 'Angelina' , 'Aston' ],
		[ 'Brown' , 'Beth' ],
		[ 'Cathy' , 'Cassandra' , 'Cody' , 'Candy' ],
	];

	echo $names[1][1] . PHP_EOL;

	foreach ( $names as $index => $name ) {
		foreach ($name as $key => $subname) {
			echo $index . '=> ' . $key . ': ' . $subname . PHP_EOL;
		}
	}

 ?>