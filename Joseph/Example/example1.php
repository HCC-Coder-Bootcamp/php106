<?php

$names = [
	['Amy', 'Angelina', 'Aston'],
	['Brown', 'Beth'],
	['Cathy', 'Cassandra', 'Cody', 'Candy'],
];

//get a thing inside an array
// echo $names[1][1];

foreach ($names as $i => $name) {
	foreach ($name as $j => $subname) {
		echo $i . '.' . $j . ' : ' . $subname . PHP_EOL;
	}
}