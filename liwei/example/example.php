<?php 
	$names = [
		['Alice','Amy','Angelina','Aston'],
		['Brown','Bob','Beth'],
		['Cathy','Candy','Colin','Cody']
	];
	$i = 0;
	//$names[] = 'Elliot';		 
	/*while ($i < 5) {
		echo $names[$i].PHP_EOL;
		$i++;
	}*/
	foreach ($names as $index => $name) {
		foreach ($name as $keys => $subnames) {
			echo $names[$index] .':'. $keys[$subnames] .PHP_EOL;
		}
	}
	//echo $names[1][2];