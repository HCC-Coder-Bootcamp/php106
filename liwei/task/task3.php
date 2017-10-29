<?php
$array = [];
$position = null;
do {
	$input = readline();
	if ($input!='x') {
		$array[]=$input;
		print_r($array);
		}

	foreach ($array as $index => $content) {
		$status = false;
		while ($index > 0) {			
			if ($content == $array[$index-1]) {
				unset ($array[$index-1]);
				$array[$index-1] = 'unset';
				$status = true;
				$position = $index-1;	
	 		}
	 		$index--;	
		}
		
	}

	if ($status == true) {
		echo "Unset Duplicate Number $content in Position $position".PHP_EOL;
	}else{
		echo "No Duplicate Number".PHP_EOL;
	}

						
}while ($input != 'x');


