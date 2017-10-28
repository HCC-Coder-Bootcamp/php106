<?php 

	$profiles = [];
	do {
		echo "Student Profiles? (x to quit) " . PHP_EOL;
		$inputName = readline( "Name: " . PHP_EOL);
		if ( $inputName !== 'x') {
			$inputAge = readline( "Age: " . PHP_EOL);
			$inputId = readline( "ID: " . PHP_EOL);
			$profile = [];
			$profile['name'] = $inputName;
			$profile['age'] = $inputAge;
			$profile['id'] = $inputId;
			$profiles[] = $profile;
			print_r($profiles);
		}
	} while ( $inputName !== 'x' );

	echo "Name \t |" . "Age \t |" . "ID \t |" . PHP_EOL;
	foreach ($profiles as $index => $profile) {
		echo $profile['id'];
		echo "\t | ";
		echo $profile['name'];
		echo "\t | ";
		echo $profile['age'];
		echo "\t | ";
		// foreach ($profile as $key => $value) {
		// 	echo "\t |  $value " ;
		// }
		echo PHP_EOL;
		// echo PHP_EOL . "Student Profiles $index" . PHP_EOL;
		// echo $profiles[$index];
	}
