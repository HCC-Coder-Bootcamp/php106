<?php
//merge 2 arrays into one third array

$groupA = [];
$groupB = [];

do {
	$input = readline('Enter you input in group A :' . PHP_EOL . 'press x to next. ' . PHP_EOL . '');

	if ($input !=='x') {
		$groupA[] = $input;
	}

	print_r($groupA);
}while ($input !== 'x');

do {
	$input = readline('Enter you input in group B :' . PHP_EOL . 'press x to start. ' . PHP_EOL);

	if ($input !=='x') {
		$groupB[] = $input;
	}

	print_r($groupB);
}while ($input !=='x');


$merge = [];
foreach ($groupA as $index => $info) {
	$merge[] = $info;
}
foreach ($groupB as $index => $info) {
	$merge[] = $info;
}

print_r($merge);