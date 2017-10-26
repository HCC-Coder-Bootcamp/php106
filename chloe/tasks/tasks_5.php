<?php 

	$profile = [];

	do {
		$input = readline( "Student profile?" . PHP_EOL);

		if ( $input !== 'x') {
			$inputName = readline( "Name: " . PHP_EOL);
			$inputAge = readline( "Age: " . PHP_EOL);
			$inputId = readline( "ID: " . PHP_EOL);
			$profile[] = $inputName . PHP_EOL . 
						 $inputAge . PHP_EOL .
						 $inputId . PHP_EOL;
		}
	} while ( $input !== 'x' );

	foreach ($profile as $index => $details) {
		echo PHP_EOL . "Student Profile $index" . PHP_EOL;
		echo $profile[$index];
	}
