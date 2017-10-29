<?php

	$names = ['Alice','Bob','Colin','Dinesh'];

	//echo $names[2];

	$names[] = 'Elliot';
	$names[2] = 'Cindy';

	//unset($names[3]);

	//$i = 0;

	//print_r($names);


/*	while($i < 5) {

		echo $names[$i ++] . PHP_EOL;
	} */

	for($i = 0 ; $i < 5 ; $i ++) {
		echo $names[$i] . PHP_EOL;
	}

/*	foreach ($names as $index => $name) {
		echo $index . ' : ' . $name . PHP_EOL;
	} */