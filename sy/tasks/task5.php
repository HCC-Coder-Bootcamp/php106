<?php
//input student profiles (name, age and ID) into associative array, generate students table

$students = [];

do {

	$name = readline('You name :(x to exit)');
	
	if ($name !== 'x') {
		$age = readline('You age :');
		$id = readline('You ID :');

		//$profile = ['key' => $value]
		//
		$profile = ['name' =>$name, 'age' => $age , 'id' => $id,];

		$students[] = $profile;

	}

}while ($name !== 'x');

print_r($students);


echo "Name          |Age          |ID          " . PHP_EOL;

foreach ($students as $key => $student) {

	foreach ($student as $key => $value) {
	
		echo '     ' . $value . '        ' ;
	}
}

//print_r($students);

	