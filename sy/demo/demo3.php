<?php
//input any value in array, then search an element in the array

$value = [];

do {
	$input = readline('Value :' . PHP_EOL . 'Press x to continue' . PHP_EOL);

	if($input !=='x') {
		$value[] = $input;
	}
	print_r($value);
	echo "------------------" . PHP_EOL . PHP_EOL;

}while($input !=='x');


$search = readline('What you looking for? ');
$result = null;
$status = false;

foreach ($value as $index => $element) {	

	if($search == $element) {
		$status = true;
		$result = $index;
	}
}
if ($status == true) {
	echo $search . ' is found in array :' . '[' . $result . ']' . PHP_EOL;
} else {
	echo "404 - Not found. " . PHP_EOL;
}
