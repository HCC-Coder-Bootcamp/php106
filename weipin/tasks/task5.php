<?php 

	$profile = [];

	do {
		$input = readline( "Input student profile?(Y/N)" . PHP_EOL);
		if ( $input !== 'n' && $input == 'y' ) {
			$inputName = "Name: " . readline( "Name: " . PHP_EOL);
			$inputAge = "Age:  " . (int)readline( "Age: " . PHP_EOL);
			$inputId = "ID:   " . readline( "ID: " . PHP_EOL);
			$profile[] = $inputName . PHP_EOL . $inputAge . PHP_EOL . $inputId . PHP_EOL;
		}
	} while ( $input !== 'n' );

	foreach ($profile as $index => $detail) {
		echo PHP_EOL . "Student Profile $index" . PHP_EOL;
		echo "*************************************************" . PHP_EOL;
		echo $profile[$index];
		echo "*************************************************" . PHP_EOL;
	}


 ?>