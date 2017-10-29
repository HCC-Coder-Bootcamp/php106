<?php
$array = [];
for ($i = 0; $i < 11; $i++) {
	$array[] = readline("add 11 number - ");
	echo "contains : " . PHP_EOL;
    print_r($array);
}
$smallest = null;
foreach ($array as $index => $number) {
	if ($number > $smallest) {
		$smallest = $number;
	}	
}
foreach ($array as $index => $number) {
if ($smallest > $number) {
		$smallest = $number;
	}
}
echo $smallest;