<?php
//input age and name into associative array, generate age table

$arrayOfAge = [];

do {

	$name = readline('You name :(x to exit)');
	
	if ($name !== 'x') {
		$age = readline('You age :');
		$arrayOfAge[$name] = $age;

	}

}while ($name !== 'x');

	echo 'Name           ' . ' | ' . ' Age ' . PHP_EOL;

foreach ($arrayOfAge as $nama => $age) {
	echo $nama . '     ' . ' | ' . ' ' . $age . ' ' . PHP_EOL;
}

//print_r($arrayOfAge);