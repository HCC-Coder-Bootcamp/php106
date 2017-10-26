<?php 

	// unset($item[]);
	$item = [];

	do {
		if ($item !== 'x') {
		$item[] = readline('value: ');
		}
		print_r($item);
	} while ($item !== 'x'); 

	unset($item[duplicate]);