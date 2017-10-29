<?php

$array = [];
$students = [];

do {

    $input_profile = readline('Student Profile : (Y/N) ');

    if ($input_profile !== 'N' && $input_profile == 'Y') {
    	$input_id = readline('input ID : ').PHP_EOL;
    	$input_name = readline('input Name : ').PHP_EOL;
        $input_age = readline('input Age : ').PHP_EOL;
        
        $profile = [
            'id' => $input_id,
            'name' => $input_name,
            'age' => $input_age,
        ];
        $students[] = $profile;
    }   

} while($input_profile !== 'N');

echo  PHP_EOL . "**************************" . PHP_EOL;
echo 'Student Profile ' . PHP_EOL;
echo  PHP_EOL . "**************************" . PHP_EOL;

foreach ($profile as $key => $value) {

    echo "$profile[$key]".PHP_EOL;
    
}

echo PHP_EOL . "**************************" . PHP_EOL . PHP_EOL;
