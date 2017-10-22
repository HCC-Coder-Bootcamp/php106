<?php

 // 5. input student profiles (name, age and ID) into associative array, generate students table

$students = [];

do {
	echo system('clear');
	$inputName = readline('Enter a student name: (x to exit) ');
	if ($inputName !== 'x') {
		$inputAge = readline('Enter his/her age:');
		$inputId = readline('Enter his/her id:');
		$students[] = [
			'name' => $inputName,
			'age' => $inputAge,
			'id' => $inputId
		];
	}
} while ($inputName !== 'x');

echo "Name\t\tAge\t\tID" . PHP_EOL;
foreach ($students as $key => $student) {
	foreach ($student as $entity => $value) {
		echo "$value\t\t";
	}
	echo PHP_EOL;
}