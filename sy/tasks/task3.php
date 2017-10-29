<?php
//input any value in array, remove duplicate item

$items = [];

do {

	$input = readline('Enter item :(x to exit.)');

	if ($input !=='x') {

		$items[] = $input;
	}
}while ($input !== 'x');

	if ($items == $items) {
		echo $items[];
	}
	
print_r($items);
echo '--------------------' . PHP_EOL;

foreach ($items as $index => $item) {
	

}



$unique=array("","A1","","A2","","A1","");
$duplicated=array();

foreach($unique as $k=>$v) {

if( ($kt=array_search($v,$unique))!==false and $k!=$kt )
 { unset($unique[$kt]);  $duplicated[]=$v; }

}

sort($unique); // optional
sort($duplicated); // optional