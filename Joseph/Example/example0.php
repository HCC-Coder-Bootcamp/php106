<?php

$names = ['Alice', 'Bob', 'Colin', 'Dinesh', 'Elliot'];
$i = 0;
$names[]  = 'Joseph';
$names[3] = 'Davion';

print_r($names);
echo $names[4] . PHP_EOL;

while ($i <= 5) {
	echo $names[$i] . PHP_EOL;
	$i++;
}

foreach ($names as $index => $name) {
	echo $index . ' : ' . $name . PHP_EOL;
}